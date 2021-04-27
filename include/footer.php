</body>
 <!-- JavaScript (Opcional) -->
 <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <script src="./Public/js/bootstrap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
<!-- Modal de Mensagem de Erro ou Sucesso-->
 <?php
    if ($_SESSION['mensagem'] != "") {
        if ($_SESSION['request'] == 'success') {
    ?>
         <script>
             swal("<?php echo $_SESSION['mensagem'] ?>", "", "success");
         </script>
     <?php
        } else {
        ?>
         <script>
             swal("<?php echo $_SESSION['mensagem'] ?>", "", "error");
         </script>
 <?php
        }
    }
    ?>
    <?php
    $_SESSION['mensagem'] = "";
    ?>
<!-- Iscript Para modal da Funcão Delete-->    
 <script>
     $(document).ready(function() {
         $('.deletebtn').on('click', function() {
             $('#ExemploModalCentralizado').modal('show');
             $tr = $(this).closest('tr');
             var dados = $tr.children("td").map(function() {
                 return $(this).text();
             }).get();

             console.log(dados);
             $('#delete_id').val(dados[0]);

         });
     });
 </script>

<!-- Sccript Mascarra para o Numero do Telefone-->
 <script>
     jQuery("input.telefone")
         .mask("(99) 9999-9999?9")
         .focusout(function(event) {
             var target, phone, element;
             target = (event.currentTarget) ? event.currentTarget : event.srcElement;
             phone = target.value.replace(/\D/g, '');
             element = $(target);
             element.unmask();
             if (phone.length > 10) {
                 element.mask("(99) 99999-999?9");
             } else {
                 element.mask("(99) 9999-9999?9");
             }
         });
 </script>


 </html>