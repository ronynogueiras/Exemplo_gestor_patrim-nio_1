      <div style="margin-top:10px" id="page-wrapper">
        <div class="graphs">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Nome</th>
                <th>Valor</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($data['ativos']  as $ativo) { ?>
              <tr>
                <td><?php echo $ativo['nome'];?></td>
                <td><?php echo 'R$'.number_format($ativo['valor_estimado'], 2, ',', '.');?></td>
              </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </div>
</div>
