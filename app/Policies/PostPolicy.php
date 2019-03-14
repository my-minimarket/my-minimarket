<?php

namespace App\Policies;

use App\Customer;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function before(Customer $customer, $ability) {
        if($customer->isAdmin()) {
            return true;
        }
    }
    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Post  $post
     * @return mixed
     */
    public function show(Customer $customer, Post $post)
    {
        return true;
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\Customer  $customer
     * @return mixed
     */
    public function create(Customer $customer, Post $post)
    {
        return $customer->id === $post->customer_id;
    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Post  $post
     * @return mixed
     */
    public function update(Customer $customer, Post $post)
    {
        return $customer->id === $post->customer_id;
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Post  $post
     * @return mixed
     */
    public function delete(Customer $customer, Post $post)
    {
        return $customer->id === $post->customer_id;
    }

    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Post  $post
     * @return mixed
     */
    public function restore(Customer $customer, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\Customer  $customer
     * @param  \App\Post  $post
     * @return mixed
     */
    public function changeOwner(Customer $customer)
    {
        return $customer->isAdmin();
    }
}
