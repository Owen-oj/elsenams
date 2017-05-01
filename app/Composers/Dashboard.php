<?php


namespace App\Composers;


use App\Repositories\Contracts\OrderRepository;
use App\Repositories\Contracts\UserRepository;
use Illuminate\View\View;

class Dashboard
{
    protected $orders,$users;

    public function __construct(OrderRepository $repository,UserRepository $userRepository)
    {
        $this->orders = $repository;
        $this->users = $userRepository;
    }


    public function compose(View $view)
    {
        $order_count = $this->orders->findWhereNotIn('status',['completed'])->count();
        $orders_completed = $this->orders->findWhere(['status'=>'completed'])->count();

        $view->with('order_count',$order_count);
        $view->with('orders_completed',$orders_completed);
        $view->with('customer_count',$this->users->totalCustomers());
    }

}