<!-- Modal -->
<div class="modal fade" id="callModal" tabindex="-1" role="dialog" aria-labelledby="callModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callModalTitle">Заказать звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="outline-secondary" id="callForm" action="" data-handler="/call" data-placement="modal" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="type">

                <div class="modal-body form-row">
                    <div class="col-md-6 mb-1 form-group">
                        <input type="text" class="form-control" name="person" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6 mb-1 form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Телефон*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-dark" data-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>