<div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-6">
                <form role="form" action="http://bwt-test.local/Sign/Up/" method="post">
                    <h2>Регистрация</h2>
                    <div class="row">
                        <div class="form-group">
                            <input type="text" name="firstName" id="first_name" class="form-control input-lg" placeholder="Имя" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <input type="text" name="lastName" id="last_name" class="form-control input-lg" placeholder="Фамилия" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                        	<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email"
                               pattern="^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$" required>
                    	</div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <select name="sex" id="sex" class="form-control input-lg">
                                <option selected value="">Пол</option>
                                <option value="Мужской">Мужской</option>
                                <option value="Женский">Женский</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <input type="date" name="birthday" id="birthday" class="form-control input-lg"
                                   placeholder="YYYY-mm-dd" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])">
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" name="register" value="Зарегистрироваться" class="btn btn-primary btn-block btn-lg">
                    </div>
                </form>
            </div>
        </div>
    </div>