<div class="modal fade" id="addTodoModal" tabindex="-1" role="dialog" aria-labelledby="addTodoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTodoModalLabel">Add Todo</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="POST" action="/todos">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="text" name="content" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <input type="date" name="date" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-outline-primary">Add Todo</button>
                </div>
            </form>
        </div>
    </div>
</div>