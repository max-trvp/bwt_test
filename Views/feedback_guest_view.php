<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <form role="form" action="http://bwt-test.local/Feedback/Send/" method="post">
                    <h2>Обратная связь</h2>
                    <div class="row">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control input-lg" placeholder="Имя"
                                   pattern="[a-zA-Z]{1,20}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                        	<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email"
                               pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" required>
                    	</div>
                    </div>
                    <div class="row">
                        <textarea name="message" class="form-control" rows="3" placeholder="Текст сообщения"></textarea>
                    </div>
                    <br />
                    <div class="row">
                        <div class="col-xs-2 col-md-2"><img src="/util/capcha.php"></div>
                        <div class="col-xs-8 col-md-4"><input type="test" name="capcha" id="capcha" class="form-control input-lg" placeholder="Enter capcha" required></div>
                        <div class="col-xs-2 col-md-6"><input type="submit" value="Отправить" name="send" class="btn btn-primary btn-block btn-lg">
                        </div>
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>