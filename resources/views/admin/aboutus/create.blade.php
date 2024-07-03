<x-app-layout>


    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Create About Us</div>

                                <div class="card-body">
                                    <form action="{{ route('admin.about.store') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="section1">Section 1</label>
                                            <textarea class="form-control" id="section1" name="section1">{{ old('section1') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="section2">Section 2</label>
                                            <textarea class="form-control" id="section2" name="section2">{{ old('section2') }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="section3">Section 3</label>
                                            <textarea class="form-control" id="section3" name="section3">{{ old('section3') }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

@section('scripts')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('section1');
        CKEDITOR.replace('section2');
        CKEDITOR.replace('section3');
    </script>
@endsection
