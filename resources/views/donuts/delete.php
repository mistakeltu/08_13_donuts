<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card mt-5">
                <div class="card-header">
                    Confirm delete
                </div>
                <div class="card-body">
                    <form method="post" action="<?= URL . 'donuts/destroy/' . $donut['id'] ?>">
                        <h5 class="card-title">Do you want to delete '<?= $donut['title'] ?>' donut?</h5>
                        <button type="submit" class="btn btn-primary">Yes</button>
                        <a href="<?= URL . 'donuts' ?>" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>