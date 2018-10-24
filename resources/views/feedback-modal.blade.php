<!-- Modal -->
<div class="modal fade" id="feedbackModal" tabindex="-1" role="dialog" aria-labelledby="feedbackModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="feedbackModalTitle">Оставить отзыв</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="outline-secondary" id="feedbackForm" action="" data-handler="/feedback" data-placement="feedback" method="post">
                {{ csrf_field() }}
                <div class="modal-body form-row">
                    <div class="col-md-6 mb-1 form-group">
                        <input type="text" class="form-control" name="name" placeholder="Ваше имя*">
                    </div>
                    <div class="col-md-6 mb-1 form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Телефон*">
                    </div>
                    <div class="col-md-12 mb-1 form-group">
                        <label>Отзыв*</label>
                        <textarea class="form-control" name="comment" rows="3"></textarea>
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