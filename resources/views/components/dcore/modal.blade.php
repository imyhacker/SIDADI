<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal Add Page</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('add_page')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>Pages</label>
                        <input type="text" name="page" class="form-control" placeholder="/index">
                    </div>
                    <div class="form-group">
                        <label>Status Pages</label>
                        <select name="status" class="form-control">
                            <option disabled selected value>Pilih Status</option>
                            <option value="on">on</option>
                            <option value="off">off</option>
                        </select>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
