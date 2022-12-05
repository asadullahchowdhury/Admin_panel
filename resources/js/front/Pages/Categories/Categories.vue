<template>

    <div class="categories">
        <div class="page-title">Categories</div>
        <div class="page-wrapper">
            <div class="section-title">Categories</div>
            <!-- filter section-->
            <div class="filter-section">
                <div class="row">
                    <div class="col-md-4"><input type="search" class="form-control shadow-none" placeholder="Search">
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-theme px-4" data-bs-toggle="modal" data-bs-target="#category_modal">
                            Add Categories
                        </button>
                    </div>

                    <div class="col-md-12 mt-3">
                        <div class="text-end">
                            <button type="button" class="btn btn-theme"><img src="/icons/printer.svg" alt="">
                            </button>
                            <button type="button" class="btn btn-theme"><img src="/icons/file.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- table section-->

            <div class="table-section">
                <table class="table table-hover table-theme">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Hp</td>
                        <td>Lorem ipsum dolor sit amet, , molestias.
                        </td>
                        <td class="noprint text-end">
                            <button type="button" class="btn btn-theme"><img src="/icons/edit-2.svg" alt="">
                            </button>
                            <button type="button" class="btn btn-danger"><img src="/icons/trash.svg" alt=""></button>
                        </td>
                    </tr>

                    <tr>
                        <td>apple</td>
                        <td>Lorem ipsum dolor sit amet, , molestias.
                        </td>
                        <td class="noprint text-end">
                            <button type="button" class="btn btn-theme"><img src="/icons/edit-2.svg" alt="">
                            </button>
                            <button type="button" class="btn btn-danger"><img src="/icons/trash.svg" alt=""></button>
                        </td>
                    </tr>

                    <tr>

                        <td>Dell</td>
                        <td>Lorem ipsum dolor sit amet, , molestias.
                        </td>
                        <td class="noprint text-end">
                            <button type="button" class="btn btn-theme"><img src="/icons/edit-2.svg" alt="">
                            </button>
                            <button type="button" class="btn btn-danger"><img src="/icons/trash.svg" alt=""></button>
                        </td>
                    </tr>

                    <tr>

                        <td>Toshiba</td>
                        <td>Lorem ipsum dolor sit amet, , molestias.
                        </td>
                        <td class="noprint text-end">
                            <button type="button" class="btn btn-theme"><img src="/icons/edit-2.svg" alt="">
                            </button>
                            <button type="button" class="btn btn-danger"><img src="/icons/trash.svg" alt=""></button>
                        </td>
                    </tr>

                    <tr>
                        <td>Samsung</td>
                        <td>Lorem ipsum dolor sit amet, , molestias.
                        </td>
                        <td class="noprint text-end">
                            <button type="button" class="btn btn-theme"><img src="/icons/edit-2.svg" alt="">
                            </button>
                            <button type="button" class="btn btn-danger"><img src="/icons/trash.svg" alt=""></button>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!--categories Modal -->
    <div class="modal fade" id="category_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Categories</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Title</label>
                                <input type="text" class="form-control" placeholder="Category Name" id="name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="code">Item Code</label>
                                <input type="text" class="form-control" placeholder="Item code" id="code">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="desc">Description</label>
                        <textarea class="form-control" placeholder="Description" style="height: 100px"></textarea>
                    </div>

                    <div class="form-group">
                        <label class="upload-logo">
                            <img src="/icons/image.svg" alt=""> Upload Image
                            <input type="file" class="d-none">
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-theme px-4">Confirm</button>
                </div>
            </div>
        </div>
    </div>

</template>
<script>

export default {}
</script>
