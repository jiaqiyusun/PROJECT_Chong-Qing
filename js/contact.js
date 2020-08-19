$('#contact-form').submit(function(e){
    var name = document.getElementById('inputName'),
        email = document.getElementById('inputEmail'),
        telefone = document.getElementById('inputTelefone'),
        data = document.getElementById('inputData'),
        hora = document.getElementById('inputHora'),
        pessoa = document.getElementById('inputPessoa'); 
        alert("Chegou aqui");
        if(!name.value || !email.value || !telefone.value || !data.value || !hora.value|| !pessoa.value ){
            alertify.error('Please check your entries')
        }else{
            $.ajax({
                url: "http://formspree.io/mikejiaqipt@gmail.com",
                method: "POST",
                data: $(this).serialize(),
                dataType: "json"
            });
            e.preventDefault();
            $(this).get(0).reset();
            alert('Message sent');

        }
})