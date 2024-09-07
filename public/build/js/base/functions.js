export async function readLang(){
    try{
        const resultado = await fetch(window.location.origin+'/api/yourappfactory/language');
        const data = await resultado.json();
        return data;
    }catch(error){
        console.log(error);
    }
}