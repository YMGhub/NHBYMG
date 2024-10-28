<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Users Management') }}
        </h2>
    </x-slot>


    <div class="containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">

                @if ($message = Session::get('success'))
                    <div class="alert alert-success my-2">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                @can('users-create')
                    <div class="container">
                        <a href={{ route('users.create') }} style="float: right;"
                            class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                            Create User</a>
                    </div>
                @endcan

                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead
                        class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                        <tr class="text-white">
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Name</th>
                            <th scope="col" class="px-6 py-3">Email</th>
                            <th scope="col" class="px-6 py-3">Roles</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $user = Auth::user(); // Obtiene el usuario autenticado
                        $roles = $user->getRoleNames(); // Devuelve una colección con los nombres de los roles
                        // Si el usuario tiene un solo rol y quieres obtenerlo como string
                        $currentRole = $roles->first();

                        ?>


                        @foreach ($data as $key => $user)
                            <!--solo muestra el resto de usuarios excepto el SuperAdmin-->
                            @if ($currentRole == 'Admin')
                                @if ($user->role !== 'admin')
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                        <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                        <td class="px-6 py-5">{{ $user->name }}</td>
                                        <td class="px-6 py-5">{{ $user->email }}</td>
                                        <td class="px-6 py-5">
                                            @if (!empty($user->getRoleNames()))
                                                @foreach ($user->getRoleNames() as $v)
                                                    <label
                                                        class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $v }}</label>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td class="px-6 py-5">
                                            <div class="inline-flex rounded-md shadow-sm" role="group">
                                                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                                    href="{{ route('users.show', $user->id) }}">Show</a>
                                                @can('users-edit')
                                                    <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                                        href="{{ route('users.edit', $user->id) }}">Edit</a>
                                                @endcan
                                                @can('users-delete')
                                                    <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800
                                                focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2
                                                mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                            Delete</button>
                                                    </form>
                                                @endcan
                                            </div>



                                        </td>
                                    </tr>
                                @endif
                            @else
                                <!--solo muestra todos de usuarios excepto el SuperAdmin-->
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-5">{{ $user->name }}</td>
                                    <td class="px-6 py-5">{{ $user->email }}</td>
                                    <td class="px-6 py-5">
                                        @if (!empty($user->getRoleNames()))
                                            @foreach ($user->getRoleNames() as $v)
                                                <label
                                                    class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">{{ $v }}</label>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="px-6 py-5">
                                        <div class="inline-flex rounded-md shadow-sm" role="group">
                                            <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                                href="{{ route('users.show', $user->id) }}">Show</a>
                                            @can('users-edit')
                                                <a class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                                    href="{{ route('users.edit', $user->id) }}">Edit</a>
                                            @endcan
                                            @can('users-delete')
                                                <form method="post" action="{{ route('users.destroy', $user->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="focus:outline-none text-white bg-red-700 hover:bg-red-800
                                        focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2
                                        mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                        Delete</button>
                                                </form>
                                            @endcan
                                        </div>



                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
