<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card mt-5">
                <div class="card-header">
                    Create new donut
                </div>
                <div class="card-body">
                    <form method="post" action="<?= URL . 'donuts/store' ?>">
                        <h5 class="card-title">Add new</h5>
                        <p class="card-text">Add new kind of donut</p>
                        <div class="mb-3">
                            <label class="form-label">Donut title</label>
                            <input type="text" class="form-control" name='title'>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Donut coating</label>
                            <select class="form-select" name='coating'>
                                <?php foreach ($coatings as $coating) : ?>
                                    <option value="<?= $coating['id'] ?>"><?= $coating['title'] ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="extra" name="extra">
                                <label class="form-check-label" for="extra">
                                    Double coating
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">About donut</label>
                            <textarea class="form-control" rows="3" name='description'></textarea>
                        </div>
                        <div class="mb-3" id="--hole">
                            <label class="form-label">Donut hole in (2-15cm): <b>2</b> cm</label>
                            <input type="range" class="form-range" min='2' max='15' name='hole' value="2">
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="<?= URL . 'donuts' ?>" class="btn btn-danger">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>