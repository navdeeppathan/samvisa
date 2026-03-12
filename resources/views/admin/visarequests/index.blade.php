@extends('admin.layouts.admin')

@section('title','Visa Requests')

@section('content')

<div class="container mt-4">


<h3 class="mb-4">Visa Requests</h3>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body">

        <div class="table-responsive">
            <table class="table table-bordered table-striped align-middle">

                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Nationality</th>
                        <th>Destination</th>
                        <th>Skip Payment</th>
                        <th>Message</th>
                        <th>Created</th>
                        <th width="160">Actions</th>
                    </tr>
                </thead>

                <tbody>

                    @forelse($requests as $req)

                    <tr>
                        <td>{{ $req->id }}</td>
                        <td>{{ $req->name }}</td>
                        <td>{{ $req->email }}</td>
                        <td>{{ $req->phone }}</td>
                        <td>{{ $req->nationality }}</td>
                        <td>{{ $req->destination }}</td>

                        <td>
                            @if($req->skip_payment)
                                <span class="badge bg-warning text-dark">Yes</span>
                            @else
                                <span class="badge bg-success">No</span>
                            @endif
                        </td>

                        <td style="max-width:200px;">
                            {{ Str::limit($req->message,80) }}
                        </td>

                        <td>{{ $req->created_at->format('d M Y') }}</td>

                        <td>

                            <!-- Reply Button -->
                            <button 
                                class="btn btn-sm btn-primary"
                                data-bs-toggle="modal"
                                data-bs-target="#replyModal"
                                data-id="{{ $req->id }}"
                                data-email="{{ $req->email }}">
                                Reply
                            </button>

                            <!-- Delete -->
                            <form action="{{ route('admin.visa.delete',$req->id) }}" 
                                  method="POST" 
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger"
                                    onclick="return confirm('Delete this request?')">
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>

                    @empty

                    <tr>
                        <td colspan="10" class="text-center">
                            No Visa Requests Found
                        </td>
                    </tr>

                    @endforelse

                </tbody>

            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-3">
            {{ $requests->links() }}
        </div>

    </div>
</div>


</div>

<!-- Reply Modal -->

<div class="modal fade" id="replyModal">
  <div class="modal-dialog">
    <div class="modal-content">


  <form id="replyForm" method="POST">
    @csrf

    <div class="modal-header">
        <h5 class="modal-title">Send Reply</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

    <div class="modal-body">

        <div class="mb-3">
            <label class="form-label">Message</label>
            <textarea name="message" class="form-control" rows="5" required></textarea>
        </div>

    </div>

    <div class="modal-footer">
        <button class="btn btn-success">Send Email</button>
    </div>

  </form>

</div>


  </div>
</div>

<script>

document.addEventListener("DOMContentLoaded",function(){

    const replyModal = document.getElementById('replyModal');

    replyModal.addEventListener('show.bs.modal',function(event){

        const button = event.relatedTarget;
        const id = button.getAttribute('data-id');

        const form = document.getElementById('replyForm');

        form.action = "/admin/visa-requests/" + id + "/reply";

    });

});

</script>

@endsection
