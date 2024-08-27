<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __(' Edit User') }}
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
            </div>
        </h2>
    </x-slot>

    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">


                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form action="{{ route('users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="mb-6">
                            <div class="form-group">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</label>
                                <input type="text" value="{{ $user->name }}" name="name"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    placeholder="Name">
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="form-group">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>
                                <input type="email" name="email" value="{{ $user->email }}"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    placeholder="Email">
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="form-group">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>
                                <input type="password" name="password"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    placeholder="Password">
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="form-group">
                                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                                    Password:</label>
                                <input type="password" name="confirm-password"
                                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="mb-6">
                            <div class="form-group">
                                <label
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role:</label>
                                <select multiple
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    name="roles[]">

                                    @foreach ($roles as $role)
                                        <option @if (in_array($role, $userRole)) selected @endif
                                            value="{{ $role }}">{{ $role }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 mb-3 text-right">
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
