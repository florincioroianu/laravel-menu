<?php

namespace App\Policies;

use App\Enums\RolesEnum;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RestaurantPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function viewAny(User $user): Response|bool
    {
        return $user->role->value === RolesEnum::ADMIN->value;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return Response|bool
     */
    public function view(User $user, Restaurant $restaurant)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return Response|bool
     */
    public function update(User $user, Restaurant $restaurant)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return Response|bool
     */
    public function delete(User $user, Restaurant $restaurant)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return Response|bool
     */
    public function restore(User $user, Restaurant $restaurant)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param  \App\Models\Restaurant  $restaurant
     * @return Response|bool
     */
    public function forceDelete(User $user, Restaurant $restaurant)
    {
        //
    }
}
