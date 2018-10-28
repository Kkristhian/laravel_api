window.onload = atualizaTabela;
window.onload = atualizaTabelaOrdem;

function deleta(iCodigo){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://localhost:41121/api/regiao/" + iCodigo,
            success: function(oRetorno){
                atualizaTabela();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}

function atualizaTabela(){
    try {
        $.ajax({
            type: "get",
            async: false,
            dataType: "json",
            url: "http://localhost:41121/api/regiao",
            success: function(oRetorno){
                console.log(oRetorno);
                let sHtml = "";

                oRetorno.forEach(element => {
                    sHtml += "<tr class='row'>";
                    sHtml += "<td class='col-2 center'>" + element.IDRegiao + "</td>";
                    sHtml += "<td class='col-8'>" + element.DescricaoRegiao + "</td>";
                    sHtml += "<td class='col-2 center'>";
                    sHtml += "<a href=''>";
                    sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                    sHtml += "</a>&nbsp;&nbsp;";
                    sHtml += "<a onclick='deleta(" + element.IDRegiao + ")'>";
                    sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                    sHtml += "</a>";
                    sHtml += "</td>";
                    sHtml += "</tr>";
                });

                $("#tabela").html(sHtml);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Atualizar");
    }
}

$("#cadastrar").on("click", function(event){
    event.preventDefault();

    let iCodigo = $("#IDRegiao").val();
    let sDescricao = $("#DescricaoRegiao").val();

    try {
        $.ajax({
            type: "post",
            async: false,
            dataType: "json",
            data: {
                IDRegiao: iCodigo,
                DescricaoRegiao: sDescricao
            },
            // url: "http://localhost:41121/api/regiao/" + id,
            url: "http://localhost:41121/api/regiao",
            success: function(oRetorno){
                window.location = "http://localhost:41121/inicial/ConsultaRegiao";
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Cadastrar");
    }

    // $("#atualizar").on("click", function(id){
    //     event.preventDefault();
    
    //     let sDescricao = $("#DescricaoRegiao").val();
    
    //     try {
    //         $.ajax({
    //             type: "post",
    //             async: false,
    //             dataType: "json",
    //             data: {
    //                 DescricaoRegiao: sDescricao
    //             },
    //             url: "http://localhost:41121/api/regiao/" + id,
    //             success: function(oRetorno){
    //                 window.location = "http://localhost:41121/inicial/ConsultaRegiao";
    //             }
    //         });
    //     } catch(oErro){
    //         console.log(oErro);
    //         alert("Erro ao excluir");
    //     }

// --------------------------------------- ORDEM ---------------------------------

function deletaOrdem(iCodigo){
    try {
        $.ajax({
            type: "delete",
            async: false,
            dataType: "json",
            url: "http://localhost:41121/api/ordens_detalhes/" + iCodigo,
            success: function(oRetorno){
                atualizaTabelaOrdem();
                console.log(oRetorno);
            }
        });
    } catch(oErro){
        console.log(oErro);
        alert("Erro ao Deletar");
    }
}



    function atualizaTabelaOrdem(){
        try {
            $.ajax({
                type: "get",
                async: false,
                dataType: "json",
                url: "http://localhost:41121/api/ordens_detalhes",
                success: function(oRetorno){
                    console.log(oRetorno);
                    let sHtml = "";
    
                    oRetorno.forEach(element => {
                        sHtml += "<tr class='row'>";
                        sHtml += "<td class='col-2 center'>" + element.IDOrdem + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.IDProduto + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.PrecoUnitario + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.Quantidade + "</td>";
                        sHtml += "<td class='col-2 center'>" + element.Desconto + "</td>";
                        sHtml += "<td class='col-2 center'>";
                        sHtml += "<a href=''>";
                        sHtml += "<i  class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-refresh\">Update</span></i>";
                        sHtml += "</a>&nbsp;&nbsp;";
                        sHtml += "<a onclick='deleta(" + element.IDOrdem + ")'>";
                        sHtml += "<i class=\"btn btn-danger\"><span class=\"glyphicon glyphicon-remove\">Delete</span></i>";
                        sHtml += "</a>";
                        sHtml += "</td>";
                        sHtml += "</tr>";
                    });
    
                    $("#tabelaOrdem").html(sHtml);
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao Excluir");
        }
    }

    
    $("#cadastrarOrdem").on("click", function(event){
        event.preventDefault();
    
        let iCodigo = $("#IDOrdem").val();
        let sIDProduto = $("#IDProduto").val();
        let sPrecoUnitario = $("#PrecoUnitario").val();
        let sQuantidade = $("#Quantidade").val();
        let sDesconto = $("#Desconto").val();
        
    
        try {
            $.ajax({
                type: "post",
                async: false,
                dataType: "json",
                data: {
                    IDProduto: sIDProduto,
                    PrecoUnitario: sPrecoUnitario,
                    Quantidade: sQuantidade,
                    Desconto: sDesconto
                },
                url: "http://localhost:41121/api/ordens_detalhes",
                success: function(oRetorno){
                    window.location = "http://localhost:41121/inicial/ConsultaOrdem";
                }
            });
        } catch(oErro){
            console.log(oErro);
            alert("Erro ao excluir");
        }
        
        
        // $("#atualizarOrdem").on("click", function(id){
            //     event.preventDefault();
            
            //     let sDescricao = $("#DescricaoRegiao").val();
            
            //     try {
            //         $.ajax({
            //             type: "post",
            //             async: false,
            //             dataType: "json",
            //             data: {
            //                 DescricaoRegiao: sDescricao
            //             },
            //             url: "http://localhost:41121/api/regiao/" + id,
            //             success: function(oRetorno){
            //                 window.location = "http://localhost:41121/inicial/ConsultaRegiao";
            //             }
            //         });
            //     } catch(oErro){
            //         console.log(oErro);
            //         alert("Erro ao excluir");
            //     }
    )};
