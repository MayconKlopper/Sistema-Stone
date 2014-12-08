<script type="text/javascript">
      function Mascara(obj, funcao)
      {
        vObj = obj;
        vFun = funcao;

        setTimeout('execMascara()', 1);
      }

      function execMascara()
      {
        vObj.value = vFun(vObj.value);
      }
      function Cpf(v)
      {
        v = v.replace(/\D/g,''); // Remove tudo que não for digito
        v = v.replace(/(\d{3})(\d)/,'$1.$2');
        v = v.replace(/(\d{3})(\d)/,'$1.$2');
        v = v.replace(/(\d{3})(\d)/,'$1-$2');

        return v;

      }
      function Telefone(v)
      {
        v = v.replace(/\D/g,'');
        v = v.replace(/^(\d\d)(\d)/g,'($1) $2');
        v = v.replace(/(\d{4})(\d)/,'$1-$2');

        return v;
      }
      function Celular(v)
      {
        v = v.replace(/\D/g,'');
        v = v.replace(/^(\d\d)(\d)/g,'($1) $2');
        v = v.replace(/(\d{5})(\d)/,'$1-$2');

        return v;
      }
      function Cep(v)
      {
        v = v.replace(/\D/g,'');
        v = v.replace(/(\d{5})(\d{1,5})$/,'$1-$2');       

        return v;
      }

      function Cnpj(v)
      {
        v = v.replace(/\D/g,'');
        v = v.replace(/^(\d{2})(\d)/,'$1.$2');
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/,'$1.$2.$3');
        v = v.replace(/(\d{3})(\d)/,'$1/$2');
        v = v.replace(/(\d{4})(\d)/,'$1-$2');

        return v;
      }
      function Data(v)
      {
        v = v.replace(/\D/g,'');
        v = v.replace(/^(\d{2})(\d)/, '$1/$2');
        v = v.replace(/(\d{2})(\d)/, '$1/$2');

        return v;
    
      
      }
    </script>