    <?php
    $num = 5000;
    function escopo_1(){
                              //Repare que não foi atribuído nenhum valor à variável "$num" declarada dentro de escopo_1
        $num += 5;            //Significa: variável "$num" mmais 5 (o sinal de "+" mais é de soma, não de incremento).
        echo $num;            //Imprima a variável "$num" quando a função ecopo_1 for chamada.
    }
    echo $num;                //Imprima a variável "$num"
    escopo_1();               //Função "escopo_1" sendo invocada.

    