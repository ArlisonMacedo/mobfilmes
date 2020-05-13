<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./semantic/dist/semantic.css">
    <script src="semantic/dist/semantic.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="shortcut icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAgVBMVEX///8AAACysrIoKCj4+Pjj4+PY2Nifn5/FxcXv7+/o6OghISG4uLj8/PyLi4uoqKh2dnZfX1+amprQ0NDt7e2/v78zMzPLy8tkZGTd3d1YWFhSUlJwcHBERETBwcF+fn4UFBSSkpJCQkJ7e3smJiZLS0s2NjYLCwuFhYVqamoXFxd7WysrAAAL/0lEQVR4nN1d6XoiKxBV4xqXdl+ik9g6xpj3f8AbYxz7FAXdDUXDzfk3fhOgGqj1ALWabzTns0WSvo0np2X/XL/i3F+eJuO3NFnM5k3v/fvEsN0Ybf/WzXjajhrtYeihWmDTGD/lyJbFctxohR5yCbQ7kxLCPTDptEMPvQB6g4uVdHfsFlHvzHnnj5N4N5ySXmhBeDQbWwHxbngZxKd7Vmsx8W64zEKLlEVvuheW74p+J5Yt2XbTLSbsNqGF+0JXQrnosQ29WF+XXuW74rAKKF/33bt83zKGmsd28fV5WH/52cngtTtrt9qz1esg+fLF14fCf78NsR+fC3lm/Uk6aOtVYrM9GE36RRraVe0FDD9yx7TfJQbZsujNkku+uUk9i4RY5Eo3KPvNe43d2dzouTqVM38xjuRpartrNlNzNLmuyAXomAZx6Dw7Nf48NeqfhpAMJvRMGnQkEcZuRoYeJt6nsWHoXG6fdA37oCvWC4ehPoJ4c1udFK2jtqejaEeItrbXqfziaU51nT3JfswMdCrmnPjpb6jVaQM/HeqCJJ/6LdH0+eGhr54mOejb1dAo1j/i20KzBStwF+f82vkU3owDtpdlNfnNGb98RGMqfst3JLswglergvqGDSReqoxnnk9eP/GYa92ThdCCnUYhNcft9GX1dZQNF3eIWI0d0/CbRMOlwa2lsZ9mF+7NWoFz+3eujb4xK9SbW5iLFpPTcZxFxqO4yAzWEkxY5bQXGQVWbUJIBWO5HIbErPsq0ghmMM64teXqqm2FriJcwQzLMruwUVuKoRTERgFW5rkn1I4HqN9+bxNMqVWlufhQbfGsjO1QvhHVlYmJPzBXRlfaLKoaK5yd56DOYkmFqq70WPbgHeoIS6nBofLn8bGVFI16LsNQURK/ISvNOih2sYQ/qfgyVYe7xaDoisJpDcUSjnyO0wGKj1pU3dOcyMTrMF1AK+0vxf6MTv6T31E6geYZCwUGyhqNyxAiFLNYxHujazRUyqIYKKOgwI6i2W0fNRBJ0DRLbgGV2vr3KkbpBBIhnPP+P1XAsTlrKlpkxDk5Dbpz4zT1CFpUMRtFksraVjRINxDdaHTeZuRzOMe8r5008R4404VnihIIm3Lq2PWPXvZOZUpx2Cf9/yTGxdWZ+dfx2be+IqlwfSREfCDH1OFrpim/NB+6u7RJG2Ls147dAtXQc72YuOC6SSRT6KghSJrBuUZkBFE2mkkkMbNrUEjdP3l+SBbEeeM3GCEdup7LURIFe5/6hnibbKBIMjvOG4cp6/jM9pAyGfc1yWZ17pIr2LoaWAPIJDIERhL4uus+lonqUd+QSVQ3WSo8hRqurT99QyZRjRmQKC9gvjRsYn/+DU6i4pARUyHwpbV8aV/+Ddln1P/GsEkidaFnhPvyb5AYQ7Y8kV9iJRk47570DfGiUNdgjrRgYtUMg4T1gx99gweRMcePxzhEdopJQk/+DUZ/ME/EcRXpziihJ32DXWQXCiZzZAoxORJ60TeYKcym+DF7IbOC8iSUoBVSoG+dyX9j3d+C1sABJFxyFEcP/g2mhx/aFD+30PKBRp/YUwV78aIP+jWPvY5hhVC3REKe7i+tbzAB/iD6ws9Loc6ohPyRDWl9A6dt+/dfMVMlFcMpEtZ63OF9YX2TQuP35YiLV4qdp0qoVqWvkNU3uFDu9gLy/nupvjgJeX0j6d9glPhTwmjCj2JeMSuhf30Dy2R/+w0nVuyoDS+hd32DMcRtI6LLJsZA1EjI6xu5eArtxW2+4EzMXqwrnYQs375+Ers2CZq9hfJgQuQ+pl7CWsqIKFZPh434XWhDRSNX1jZIyHvlQvoGbd/1F7T3cixLk4Q+9c0K2ryqGlQ+cubXKKFH/wZTTteFAVGjIIfNLKHGv5HQN590XYBHI3ioKU9Cb/4N5KOuywJq4IKlk1wJef/GvT4FX+5AVamg/5QvoSd9Ax33aZpN8NhPAQlrPe7kq6u+QePQJMpV8ELGIhJ6iacw6/RMNoNT04hiErL6xvG+BGhrhn63UJrtGwUl9BBPge5coDl0pdBkUVRCeX0D5qJRg7t8JK/vKSyhuH8DwVKKW13ykG9xCXl9c7LWN8Ct+UAWjSRhtoyErL452+obiC6OSPWSPMdcSkLReApiiTXGv692TeaPOd+jZ/WN3ZqCnrdoPCRJSyUl5PWNVV4M7M+Bmkc5lJWQz9/YqJsssbW+RAklz1GWl5DTNzbrFBzRflQSMvrGJmAF1/uMEkreKGAjoXpo0oYWgqyTuOZQ9VFt5hDVMvLZwmoaqX1IVinYw5DWQk6XAkdvj6GGZBEonD0Ea9FH9oLknZLhfBrYzctIPG9/fukJAxdJ3kC42ALSFmskZUoevHeND+3zUZC2OGK4KEn8DBfjw8UzH7U0+08RYukPwuVpwOpMCf3MoV2KcLk2COoHaDxiyZe61WfIt8I1Isjesc95O3KksYC4If8WdL2D1S1wznqk9iR4RUSw2hNu7CHZl4IJ02D1wzTb3FV3gm4VTOsHqwHD1l7Tjv66d3BHsDo+REspHcmv42JcoyXc7nJRfig+DZaAr5mnoYdergjFiUIi4vdPoEzl6CZR8Npu1+vgUQihfkpzE8UUADR7Y+tznFMBRMEvvRXTNsxvAoiCI3xb+iz52x0x8Lzvl0bhwUSprmLg6t/PdiHnVCq8iOG8RcL+KuV8hzkzg4vk3+qAX/umBkogzLknKMM87m7DC1mFtkWQs2toFx7rA50oIY5pkPOHKbT/iOeRzSd0kWCQM6R4TVKmfTysLlMJDn8OOJv9/S1nufEupax79jvP48MRrl9/pwLxV0WuRo7sXozff7fJL7yfhgZJv++OISWnJv6ZdRKGuieKelXuHQa+60udI/LqhzsrI7r72n7/nXs0fHOexPjuTSR+zf/s7kssg2p8FuH7S+mN95XeX6pJNpH7hh3vHgh5B63uNmiSZ3DNnAKv0/M9wqRQoK2gkUl0zCtmP5jnu6DxEKXhQm8yia4Hu//xy7zf573HgRumhiQ0Xc3XT0w2FjyZyoL4YybuGplt90LUa2c68P5eG33/wZhnwhjSdEN9RCCvAZi1Nv0c1T29bQ+aic1ZM0fy3+N/o4QWC/KUB/F+on7s6YZPHPBn7h9QdzLMA9XFQV+iLODdk8vnI3/viU5IEdqa8gxWzG92Uc1YLMFEH3KWpEYLY0jf6S54JIYEioFf4jaBMnOKprKVdRr6LW4dlIffC4egyjnH8K9xc6BPWZWJYBReVgzvcVO80kGWMWzU7sfyIncW9PWtkhpR5U3E5r6p7wGXfPmHmozYzKL6pnNpz+SiNBH3u9wWqUGFwCRFJRKAOoM2kazy4qrPnHw5qHuwb5UoUbRNLJPI0Mcs3xdTeFpx7ETlPW6HvCd1GqKwGIrD5ZSNJSmQGOZQ6N6Ff4C0TQxhFMPBdcyWZZME4f3vZ/oOd12Ao/YQUfIYtB04iqrAFXP36kP4N+SVcLAuRHCcXSnE2+AJqQ2zQqPPBJaBGgpI7MF40KK5o29E40a6gyOJx6DbpbD6ZAX0XFeu1ZrJ7nTp+H6Q+ssGcof5PHNXvnG3TZ73QpMzEXXf3JUrMvUCj9thyGrQugwB1gwIsvuS10tloJVP9D4rDcja+ethHnta+Z6qSIqp3U5lQ6s2rQs+4OEkCgOu54sc9XBAi5jVrtAr+M4/OxIT2aZcgiy2VUXh3FnJ2wgStyG0Um3TV1TnxihlnwwOiaUmGM5GZ0O7X/vAv3/xAC2+Ip4+umUH00q4Q8JZ7H1SjFWoWWeK5bGxKZanbc4669zmqg8ketv8QdXr78dkZXAge7PBaGJeDj8Yh8jzrd7zB3bD/rT+6DQWq3brC+1Zd9FIpm+XbSHRvvESKlM74BIL8jhJXv5bFgvuOjJh+UJX2LsG90MA65Dzd8eMD1El8BFL4XnO51Ec8R5XHmZRyHiUwC6G5YnoddiMnxUmA9/kd0u0poVNpAGXRZXuZ2nMG3nupRH7YzfS2QOsRlZT2R83oigyF0Nz1VEJOQacRgNLskFQNGfJ8U+O87l/3027/6Op49B8Xi2S9G23fb8Le+6/n9bjj7TRbVWgU/4D2wiMI6v2picAAAAASUVORK5CYII=" type="image/x-icon">
    <title>MOB-FILMES</title>
</head>

<body style="background-color: #303f9fff;">
    
    <center>
        <img src="./img/LOGO MOB FILMES.png" alt="Logo" class="ui medium image">
    </center>
   <br><br><br>
    <div class="ui container">

        <div class="ui segment">
            <p><h1>Chegou o MOB FILMES</h1></p>
        <p><span class="ui text grey" style="font-size: larger;">Assistir filmes online dublados ficou ainda mais fácil agora.</span></p>
        <br>
        <p><span class="ui text grey" style="font-size: larger;">Essse é nosso aplicativo MOB FILMES, sem propagandas e tem uma lista ótima
             e sempre atualizada para você não perder nada do que rola no momento no cinema mundial.</span></p>
        <br>
        <p><span class="ui text grey" style="font-size: larger;">MOB FILMES é um dos melhores apps de Incorporação de Vídeo da América Latina.</span></p>
        <br>
        <p><h1>Veja as nossas Screenshots</h1></p>
        <p><span class="ui text grey" style="font-size: x-large;">Tela de Entrada</span></p>
        <center>
            <img src="./img/loading-screen.jpeg" alt="tela entrada" class="ui medium image">
        </center>
        <br><br>
        <p><span class="ui grey text" style="font-size: x-large;">Tela de Login</span></p>
        <br>
        <br>
        <center>
            <img src="./img/login-screen.jpeg" alt="Login" class="ui medium image">
        </center>
        <br><br>
        <p><span class="ui grey text" style="font-size: x-large;">Tela de Menus</span></p>
        <br><br>
        <center>
            <img src="./img/menu-screen.jpeg" alt="Menu" class="ui medium image">
        </center>
        <br><br>
        <p><span class="ui grey text" style="font-size: x-large;">Lista de Conteúdo</span></p>
        <br><br>
        <center>
            <img src="./img/list_content-screen.jpeg" alt="conteúdo" class="ui medium image">
        </center>
        <br><br>
        <p><span class="ui grey text" style="font-size: x-large;">Nosso Player</span></p>
        <br><br>
        <center>
            <img src="./img/player-screen.jpeg" alt="Player" class="ui medium image">
        </center>

        <p><h1>Que tal curtir o melhor do Cinema na palma da sua mão?</h1></p>
        <p><span class="ui grey text" style="font-size: larger;">Você só precisa se preocupar em escolher 
            algo para assistir, e o restante deixe com a gente.</span></p>
            <br><br>
        
        <p><h1>Funções do Aplicativo MOB FILMES</h1></p>
        <br>
        <div>
            <p><i class="ui arrow circle right icon yellow large"></i>
            <span class="ui grey text" style="font-size: larger;"><b>Qualidade HD</b></span></p>
            <p><i class="ui arrow circle right icon yellow large"></i>
            <span class="ui grey text" style="font-size: larger;"><b>Player próprio</b></span></p>
            <p><i class="ui arrow circle right icon yellow large"></i>
            <span class="ui grey text" style="font-size: larger;"><b>Notificações de Conteúdos</b></span></p>
            <p><i class="ui arrow circle right icon yellow large"></i>
            <span class="ui grey text" style="font-size: larger;"><b>Novidade: Suporte ao ChromeCast</b></span></p>
            <p><i class="ui arrow circle right icon yellow large"></i>
            <span class="ui grey text" style="font-size: larger;"><b>Suporte por grupo do WhatsApp e Telegram</b></span></p>
        </div>
        <br>
        <p><h2>O que fazemos?</h2></p>
        <p><span class="ui grey text" style="font-size: larger;">Resumidamente fazemos o 
            trabalho pesado para você, nos realizamos a busca ( assim como o google ) por 
            links e disponibilizamos para você!</span></p>
        <br>
        <p><h2>É seguro? Eu preciso me indentificar ou registrar?</h2></p>
        <p><span class="ui grey text" style="font-size: larger;">Sim, é Segura, voçe irar fazer um login simples 
            mas não precisa de nada sigiloso</span></p>
            <br><br>
        <p><h2>E como faço a instalação?</h2></p>
        <p><span class="ui grey text" style="font-size: larger;">Devido o Pandemia que estamos
             enfrentando a Play Store está levando até 7 dias para aprovar os novos Apps em sua
              loja, porém você não precisa esperar todo esse tempo, já estamos aqui disponibilizando
               um link "seguro do Google Drive" para você baixar e instalar o nosso APK, siga os passos
                seguintes.</span></p>
                <br><br>
        
            
        <p><h1>Clique no Botão abaixo para realizar o download do App no seu celular.</h1></p>
        <center>
            <br>
            <a href="https://drive.google.com/u/0/uc?id=1pKFmQSFlXkgk8hbynyq2fdERa2J33TkO&export=download">
                <img src="./img/downloadBTN.png" alt="">

            </a>

        </center>
        <br><br>
        <p><h2>Somos livres de propagandas</h2></p>
        <p><span class="ui grey text" style="font-size: larger;">Aqui você não vai ver aquelas janelas chatas de 
            propaganda, pedindo para você clicar em algum banner, ou esperar alguns minutos 
            para poder acessar os grupos, e depois de clicar em vários banners para poder 
            acessar ainda tem os Apps com erros que acabam fechando sozinhos do nada!!!</span></p>
        
            <br><br>
            <p><h2>Então é isso!!!</h2></p>
            <p><span class="ui text grey" style="font-size: larger;">Divirta-se e compartilhe o nosso App com tudos os seus amigos.</span></p>
        </div>
        
    </div>

    <div style="margin-bottom: 20px;"></div>

    
</body>
<footer>
    <div class="ui inverted vertical footer segment">
        <div class="ui container">
            A7xDev 2020 &copy; Todos os Direitos Reservados
        </div>
    </div>
</footer>

</html>