@extends('admin.layout')

@section('content')
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between">
            <div class="d-flex align-items-center">
                <i class="fas fa-table me-1"></i>
                DataTable Example
            </div>
            <a href="{{ route('package.create') }}" class="btn btn-sm btn-dark">
                <i class="fas fa-plus me-2"></i>Create
            </a>
        </div>
        <div class="card-body table-responsive">
            <table id="datatablesSimple" class="display responsive nowrap" width="100%">
                <thead>
                    <tr>
                        <th nowrap>No</th>
                        <th nowrap>Periode</th>
                        <th nowrap>Hotel</th>
                        <th nowrap>Maskapai/th>
                        <th nowrap>Duration</th>
                        <th nowrap>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($package as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><span class="line-2">{{ $item->title }}</span></td>
                            <td><span class="line-2">{{ $item->category->title }}</span></td>
                            <td><span class="text-nowrap">{{ mine()['dollar']($item->rate_from) }}</span></td>
                            <td><span class="text-nowrap">{{ $item->duration }} Hours</span></td>
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('single_package', $item->slug) }}" target="_blank"
                                        class="btn px-1 py-0 btn-dark">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a href="{{ route('package.edit', $item->id) }}"
                                        class=" btn px-1 ms-2 py-0 btn-warning">
                                        <i class="fa fa-pen-nib"></i>
                                    </a>
                                    <button data-bs-toggle="modal" data-bs-target="#package{{ $item->id }}"
                                        type="button" class=" btn px-1 ms-2 py-0 btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
    </main>
    </div>
    </div>
@endsection
