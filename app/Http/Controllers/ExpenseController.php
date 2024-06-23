<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Expense;
use App\Models\Category;
use App\Http\Requests\StoreExpenseRequest;
use App\Http\Requests\UpdateExpenseRequest;

class ExpenseController extends Controller
{

    protected function userId(){
        // Testing
        // return Auth()->user()->id ??  random_int(1, 10);

        return request()->user()->id;
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', $this->userId())->with(['expenses.category'])->first();

        return view('frontend.expenses.index', ['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $categories = Auth()->user()->categories;

        return view('frontend.expenses.create', ['categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreExpenseRequest $request)
    {
        $data =  $request->all();
        $data['user_id'] = $this->userId();

        $expense = Expense::create($data);
        return redirect()->back()->withSuccess('success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        return $expense;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $categories = Category::where('id', $this->userId())->get();

        $expense->load('category');
        $data = ['expense' => $expense, 'categories' => $categories];
        // return $data;
        return view('frontend.expenses.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseRequest $request, expense $expense)
    {
        $expense->update($request->all());
        return redirect()->back()->withSuccess('success!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        if($expense->user_id !== $this->userId()){
            return redirect()->back()->withErrors('something went wrong, you are unauthorized!')->withInput();
        }

        $expense->delete();
        return redirect()->back()->withSuccess('success!');
    }
}
