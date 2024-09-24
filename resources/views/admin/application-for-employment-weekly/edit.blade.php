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

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg dark:text-gray-200"
                    style="   overflow-x: auto;">

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">
                        <div>
                            <p>
                                <strong>Name: </strong><br>
                                {{ $submission['name'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Address:</strong><br>
                                {{ $submission['address'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Telephone No.:</strong><br>
                                {{ $submission['telephone_no'] }}
                            </p>
                        </div>


                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Citizenship :</strong><br>
                                {{ $submission['citizenship'] }}
                            </p>
                        </div>

                        <div>

                            <p>
                                <strong>Date of Birth: </strong><br>
                                {{ $submission['telephone_no'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>National Registration No. </strong><br>
                                {{ $submission['national_registration_no'] }}
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>NIS No.</strong><br>
                                {{ $submission['nis_no'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Type of Work Required</strong><br>
                            <p><strong>Masonry:</strong> {{ $submission['Masonry'] ? 'Sí' : 'No' }}</p>
                            <p><strong>Carpentry:</strong> {{ $submission['Carpentry'] ? 'Sí' : 'No' }}</p>
                            <p><strong>Painting:</strong> {{ $submission['Painting'] ? 'Sí' : 'No' }}</p>
                            <p><strong>Electrical:</strong> {{ $submission['Electrical'] ? 'Sí' : 'No' }}</p>
                            <p><strong>Plumbing:</strong> {{ $submission['Plumbing'] ? 'Sí' : 'No' }}</p>
                            <p><strong>Labourer:</strong> {{ $submission['Labourer'] ? 'Sí' : 'No' }}</p>
                            <p><strong>Other:</strong> {{ $submission['Other'] ? 'Sí' : 'No' }}</p>



                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>Work Experience</strong><br>
                                {{ $submission['work_experience'] }}
                            </p>

                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>

                            <p>
                                <strong>Education/Qualifications </strong><br>
                                {{ $submission['education_qualification'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong>Referee (Job Related) Name</strong><br>
                                {{ $submission['refereejob_name'] }}
                            </p>

                        </div>

                        <div>

                            <p>
                                <strong> Address </strong><br>
                                {{ $submission['refereejob_address'] }}
                            </p>

                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Length of Time Known</strong><br>
                                {{ $submission['refereejob_lenght_of_time'] }}
                            </p>
                        </div>
                        <div>
                            <p>
                                <strong>Referee (Personal) Name</strong><br>
                                {{ $submission['refereejob_name_2'] }}
                            </p>

                        </div>
                        <div>
                            <p>
                                <strong> Address </strong><br>
                                {{ $submission['refereejob_address_2'] }}
                            </p>
                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Length of Time Known</strong><br>
                                {{ $submission['refereejob_lenght_of_time_2'] }}
                            </p>

                        </div>

                        <div>
                            <p>
                                <strong>Any Other Information</strong><br>
                                {{ $submission['any_other_information'] }}
                            </p>
                        </div>

                        <div>
                            <p>
                                <strong>Signature of Applicant</strong><br>
                                {{ $submission['signature'] }}
                            </p>
                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Date</strong><br>
                                {{ $submission['date'] }}
                            </p>
                        </div>

                    </div>


                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mb-4">

                        <div>
                            <p>
                                <strong>Date</strong><br>
                                {{ $submission['date'] }}
                            </p>
                        </div>

                    </div>

                    <div>
                        @if ($submission->status == 1)
                            <b>Status:</b>
                            <span
                                style="max-width: 25%;background-color: green; color: white; padding: 5px; border-radius: 5px;">
                                Approved
                            </span>
                        @else
                            <b>Status:</b>
                            <span
                                style="max-width: 25%;background-color: red; color: white; padding: 5px; border-radius: 5px;">
                                Denied
                            </span>
                        @endif
                        <br>
                        @if ($submission->status == 0)
                            <form
                                action="{{ route('admin.application-for-employment-weekly.update', $submission->id) }}"
                                method="POST">
                                @csrf
                                @method('PUT')
                                <br>
                                <input value="{{ $submission->id }}" name="id_submission_for_employment"
                                    id="id_submission_for_employment" type="hidden">

                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="checkbox" id="status" name="status"
                                        {{ $submission->status ? 'checked' : '' }}>
                                </div>
                                <br>

                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md dark:bg-gray-200 dark:text-gray-800 hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-50">
                                    Save
                                </button>
                            </form>
                        @endif
                        <br>
                        <br>



                    </div>




                </div>


            </div>
        </div>

    </div>
</x-app-layout>
