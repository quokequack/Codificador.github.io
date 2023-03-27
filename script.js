function codificar(){
    event.preventDefault();
    const caracteres = {
        'a':'w',
        'b':'t',
        'c':'x',
        'd':'3',
        'e':'d',
        'f':'2',
        'g':'o',
        'h':'a',
        'i':'1',
        'j':'c',
        'k':'z',
        'l':'m',
        'm':'l',
        'n':'s',
        'o':'k',
        'p':'g',
        'q':'h',
        'r':'b',
        's':'v',
        't':'q',
        'u':'p',
        'v':'6',
        'w':'4',
        'x':'8',
        'y':'r',
        'z':'f',
        '0':':',
        '1':'0',
        '2':'e',
        '3':'i',
        '4':'n',
        '5':'j',
        '6':'u',
        '7':'y',
        '8':'5',
        '9':'7',
        '.':'!',
    };
    
    let palavraInput = document.getElementById('palavra').value;

    let palavra = palavraInput;
    
    let palavraCodificada = '';
    
    palavra = palavra.toLowerCase();
    
    for (let i = 0; i < palavra.length; i++){
        const caractere = palavra.charAt(i);
    
        if(caractere in caracteres){
            palavraCodificada += caracteres[caractere];
        }else{
            palavraCodificada += caractere;
        }
    }
    alert("A palavra codificada é: "+ palavraCodificada);
}
