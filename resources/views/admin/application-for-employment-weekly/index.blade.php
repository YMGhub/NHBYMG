<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Application For Employment Weekly') }}
        </h2>
    </x-slot>

    <div class="py-12 containerOut">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg containerInner">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg" style="    overflow-x: auto;">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead
                            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center">
                            <tr class="text-white">
                                <th scope="col" class="px-6 py-3">#</th>
                                <th scope="col" class="px-6 py-3">Name </th>
                                <th scope="col" class="px-6 py-3">Address </th>
                                <th scope="col" class="px-6 py-3">Telephone No.</th>
                                <th scope="col" class="px-6 py-3">Citizenship </th>
                                <th scope="col" class="px-6 py-3">Date of Birth</th>
                                <th scope="col" class="px-6 py-3">National Registration No. </th>
                                <th scope="col" class="px-6 py-3"> NIS No. </th>
                                <th scope="col" class="px-6 py-3">Type of Work Required</th>
                                <th scope="col" class="px-6 py-3">Work Experience</th>
                                <th scope="col" class="px-Q6 py-3"> Education/Qualifications </th>
                                <th scope="col" class="px-6 py-3">Referee (Job Related) Name </th>
                                <th scope="col" class="px-6 py-3">Address</th>
                                <th scope="col" class="px-6 py-3">Length of Time Known</th>
                                <th scope="col" class="px-6 py-3">Referee (Personal) Name </th>
                                <th scope="col" class="px-6 py-3">Address</th>
                                <th scope="col" class="px-6 py-3">Length of Time Known </th>
                                <th scope="col" class="px-6 py-3">Any Other Information</th>
                                <th scope="col" class="px-6 py-3">Signature of Applicant </th>
                                <th scope="col" class="px-6 py-3">Date </th>
                                <th scope="col" class="px-6 py-3">Status </th>
                                <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-center">
                                    <td class="px-6 py-5">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-5">{{ $item->name }}</td>
                                    <td class="px-6 py-5">{{ $item->address }}</td>
                                    <td class="px-6 py-5">{{ $item->telephone_no }}</td>
                                    <td class="px-6 py-5">{{ $item->citizenship }}</td>
                                    <td class="px-6 py-5">{{ $item->date_of_birth }}</td>
                                    <td class="px-6 py-5">{{ $item->national_registration_no }}</td>
                                    <td class="px-6 py-5">{{ $item->nis_no }}</td>
                                    <td class="px-6 py-5">
                                        <p><strong>Masonry:</strong> {{ $item->Masonry ? 'Sí' : 'No' }}</p>
                                        <p><strong>Carpentry:</strong> {{ $item->Carpentry ? 'Sí' : 'No' }}</p>
                                        <p><strong>Painting:</strong> {{ $item->Painting ? 'Sí' : 'No' }}</p>
                                        <p><strong>Electrical:</strong> {{ $item->Electrical ? 'Sí' : 'No' }}</p>
                                        <p><strong>Plumbing:</strong> {{ $item->Plumbing ? 'Sí' : 'No' }}</p>
                                        <p><strong>Labourer:</strong> {{ $item->Labourer ? 'Sí' : 'No' }}</p>
                                        <p><strong>Other:</strong> {{ $item->Other ? 'Sí' : 'No' }}</p>
                                    </td>
                                    <td class="px-6 py-5">{{ $item->work_experience }}</td>
                                    <td class="px-6 py-5">{{ $item->education_qualification }}</td>
                                    <td class="px-6 py-5">{{ $item->refereejob_name }}</td>
                                    <td class="px-6 py-5">{{ $item->refereejob_address }}</td>
                                    <td class="px-6 py-5">{{ $item->refereejob_lenght_of_time }}</td>
                                    <td class="px-6 py-5">{{ $item->refereejob_name_2 }}</td>
                                    <td class="px-6 py-5">{{ $item->refereejob_address_2 }}</td>
                                    <td class="px-6 py-5">{{ $item->refereejob_lenght_of_time_2 }}</td>
                                    <td class="px-6 py-5">{{ $item->any_other_information }}</td>
                                    <td class="px-6 py-5">{{ $item->signature }}</td>
                                    <td class="px-6 py-5">{{ $item->date }}</td>
                                    <td class="px-6 py-5">
                                        @if ($item->status == 1)
                                            <span
                                                style="background-color: green; color: white; padding: 5px; border-radius: 5px;">
                                                Approved
                                            </span>
                                        @else
                                            <span
                                                style="background-color: red; color: white; padding: 5px; border-radius: 5px;">
                                                Denied
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-right">
                                        @if ($item->status == 0)
                                            <a href="{{ route('admin.application-for-employment-weekly.edit', $item->id) }}"
                                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>


            </div>
        </div>

    </div>
</x-app-layout>
