<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    protected $usersRepo;

    public function __construct(UserRepository $usersRepository)
    {
        $this->usersRepo = $usersRepository;
    }

    public function index(): View
    {
        $users = $this->usersRepo->getAllUsers();

        return view('User.index', compact('users'));
    }

    public function create(): View
    {
        return view('User.create');
    }

    public function store(UserRequest $request): RedirectResponse
    {
        $this->usersRepo->storeUser($request);

        return redirect()->route('admin.users.index');
    }

    public function show(User $user): View
    {
        return view('User.show', compact('user'));
    }
}
