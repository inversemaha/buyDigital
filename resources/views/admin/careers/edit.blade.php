<div class="modal fade" id="editModal{{$item->id}}" tabindex="-1"
     aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light p-3">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"
                        id="close-modal"></button>
            </div>
            <form action="{{ route('careers.update', $item ) }}"
                  method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">

                        <label for="title" class="form-label">Title </label>
                        <input type="text" id="title"
                               class="form-control"
                               placeholder="Enter Title"
                               value="{{$item->title}}" required
                               name="title"/>
                        <input type="hidden" id="id"
                               class="form-control"
                               value="{{$item->id}}"
                               name="id"/>
                    </div>
                    <div class="mb-3">

                        <label for="title" class="form-label">Short Details </label>
                        <input type="text" id="short_details"
                               class="form-control"
                               placeholder="Short details"
                               value="{{$item->short_details}}" required
                               name="short_details"/>
                    </div>
                    <div class="mb-3">

                        <label for="" class="form-label">
                            Details </label>
                        <textarea type="text" id="details"
                                  class="form-control summernote"
                                  placeholder="Enter Details here.."
                                  name="details">{{$item->details}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="logo" class="form-label">Featured
                            Image</label>
                        <input type="file" id="logo" class="form-control"
                               name="image"/>

                    </div>

                    <div class="mb-3">
                        <label for="logo" class="form-label">Last Apply Date</label>
                        <input class="form-control" data-trigger type="text"
                               name="last_apply_date" value="{{$item->last_apply_date}}">

                    </div>
                    <div>
                        <label for="status-field"
                               class="form-label">Status</label>
                        <select class="form-control" data-trigger
                                name="is_published" id="status-field">

                            <option value="1" @if($item->is_published == true) selected @endif>Active</option>
                            <option value="0" @if($item->is_published == false) selected @endif>Inactive</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <button type="button" class="btn btn-light"
                                data-bs-dismiss="modal">Close
                        </button>
                        <button type="submit" class="btn btn-success"
                                id="edit-btn">Update
                        </button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
