<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <form role="form" action="http://bwt-test.local/Feedback/Send/" method="post">
                    <h2>Обратная связь</h2>
                    <div class="row">
                        <textarea name="message" class="form-control" rows="3" placeholder="Текст сообщения"></textarea>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-2 col-md-2">
                            <img src="/util/capcha.php">
                        </div>
                        <div class="col-xs-8 col-md-4">
                            <input type="test" name="capcha" id="capcha" class="form-control input-lg" placeholder="Enter capcha">
                        </div>
                        <input type="submit" name="sendFeedback" value="Отправить" class="btn btn-primary btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>