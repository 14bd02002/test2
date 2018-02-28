<div class="row">
    <div class="col-sm-8" style="font-size: 30px" >
        <?= $company->CompanyName ?>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-striped">
            <tbody>
                <tr>
                    <th scope="row">Наименование</th>
                    <td><?= $company->CompanyName ?></td>

                </tr>
                <tr>
                    <th scope="row">БИН</th>
                    <td><?= $company->BIN ?></td>

                </tr>
                <tr>
                    <th scope="row">Дата Регистрации</th>
                    <td><?= $company->DateOfCreation ?></td>

                </tr>
                <tr>
                    <th scope="row">ОКПО</th>
                    <td><?= $company->OKPO ?></td>

                </tr>
                <tr>
                    <th scope="row">Адрес</th>
                    <td><?= $company->Address ?></td>

                </tr>
            </tbody>
        </table>

    </div>

</div>
<div class="row">
    <div class="col-sm-3" style="background-color: #e6e6e6"><table class="table table-sm">
            <h1 style="font-size:20px; text-align: center">
                Налоговые отчисления
            </h1>
            <thead>
                <tr>
                    <th scope="col">Год</th>
                    <th scope="col">Сумма тг.</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2016</th>
                    <td>230132</td>

                </tr>
                <tr>
                    <th scope="row">2017</th>
                    <td>387169</td>

                </tr>
                <tr>
                    <th scope="row">2018</th>
                    <td colspan="2">30132</td>

                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6" style="background-color: #e6e6e6; margin-left: 100px"><table class="table table-sm">
            <h1 style="font-size:20px; text-align: center">
                Налоговые отчисления
            </h1>
            <thead>
                <tr>
                    <th scope="col">Год</th>
                    <th scope="col">Сумма тг.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">2016</th>
                    <td>230132</td>

                </tr>
                <tr>
                    <th scope="row">2017</th>
                    <td>387169</td>

                </tr>
                <tr>
                    <th scope="row">2018</th>
                    <td colspan="2">30132</td>

                </tr>
            </tbody>
        </table>
    </div>
</div>
