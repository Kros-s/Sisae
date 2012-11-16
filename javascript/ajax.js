/**
* 
* Libreria AjaxLib v1.0
*
* Realiza Peticiones AJAX De manera Sencilla y Automatica
*
* @author Marco A. Mayen Hernandez venedeth.mayen@gmail.com
* 
*/

/**Especifica las opciones de tipo de respuesta
*/

var $tipo = {
    XML: 0,
    TEXTO: 1,
    JSON: 2
}
/**Especificamos las opciones para el tipo de Metodo
*/
var $metodo = {
    GET: "GET",
    POST:"POST"
}

/**
 * Realiza un nuevo requerimiento ajax a la url especificada
 * con las opciones definidas
 * @param { String} url de la URL donde realizar la peticion
 * @param { Object} opciones de objeto JSON  con los atributos opcionales que queremos definirle
 * 
 * Opciones disponibles
 * id: Un identificadr interno para ser recibido junto a los datos 
 * metodo: $metodo.PORTo $metodo.GET
 * tipodeRespuesta: $tipo.TEXTO, $tipo.JSON ó $tipo.XML
 * parametros: un string en formato URL o un objeto de Hash
 * cache: true o false
 * avisoCargando: define el id de un elemento que queremos usar como cartel de "cargando" mientras la peticion se realiza
 * 
 * onfinish: función a ejecutarse cuando se reciban los datos. Esta funcion recibira JSON, HTML o XML y el ID al terminar la peticion
 * onerror: funcion a ejecutarse cuando se produzca un error.
 * Esta funcion recibe detalles y el ID de la peticion
 *  
 */
 function $Ajax(url, opciones){
     //Preguntamos si no quiere Caché
     if(__$P(opciones, "cache", true)==false){
         //Agregamos un parametro random a la URL
         //Ponemos ? o & segun la presencia de parametros anteriores
         var caracter = "?";
         if(url.indexOf("?")>0) caracter = "&";
         url += caracter + Math.random();
     }
     var metodo = __$P(opciones, "metodo", $metodo.GET);
     var parametros = __$P(opciones, "parametros");
     //Genera un JSON de propiedades necesarias para Prototype
     //En un futuro puede ser remplazado por otra libreria de Framework
     var protoOpc = {
         method: metodo,
         onSuccess: __$AjaxRecibir.bind(this, opciones),
         onExeption: __$AjaxError.bind(this, opciones),
         onFailure: __$AjaxError.bind(this, opciones)
     }
     //si se definieron los parametros los agregamos
     if (parametros!=undefined)
     {
         protoOpc.parameters = parametros;
     }
     //Genera la nueva peticion via Prototype
     var peticion = new Ajax.Request(url, protoOpc);
     //prende el cartel de cargando si existiera
     if(__$P(opciones, "avisoCargando")!=undefined){
         __$AjaxCargando(opciones.avisoCargando, true);
     }
 }
 
 /**
  * Funcion interna que se encarga de recibir la peticion lista desde prototype y ejecutar el 
  * evento onfinish: de la peticion
 */
 
 function __$AjaxRecibir(opciones, xhr){
     //si se ejecuta este metodo estamos seguros de que 
     //readystate == 4 y status == 200
     
     //Apagamos el cartel de cargando si este existiese
     if(__$P(opciones, "avisoCargando")!=undefined){
         __$AjaxCargando(opciones.avisoCargando, false);
     }
     //Traemos la funcion onfinish si fue definida
     var funcionRetorno = __$P(opciones, "onfinish");
     //Traemos el identificador de la peticion si este fue definido
     var id = __$P(opciones, "id");
     
     if(funcionRetorno != undefined){
         //si el usuario indico que quiere recibir la respuesta
         //suponemos TEXTO por DEFECTO
         var tipoRespuesta = __$P(opciones, "tipoRespuesta", $tipo.TEXTO);
         switch(tipoRespuesta){
             case $tipo.TEXTO:
                funcionRetorno(xhr.responseText, id);
                break;
             case $tipo.XML:
                funcionRetorno(xhr.responseXML, id);
                break;
             case $tipo.JSON:
                //Intentaremos evaluar nuestro JSON por si no es valido
                var objeto;
                try{
                    objeto = xhr.responseText.evalJSON();
                }catch (e) {
                    __$AjaxError(opciones, xhr, {code: -1, message :"JSON No valido"});
                    return;
                }
                funcionRetorno(objeto, id);
         }
     }
 }/**
 * Funcion interna que se encarga de prender o apagar el cartel de cargando
 * si es que esxistiera
 */
 function __$AjaxCargando(cartel, prender){
     if(prender){
         $(cartel).show();
     } else {
         $(cartel).hide();
     }
 }/**
 * Funcion interna que se encarga de recibir la ejecucion
 * cuando se produzca algun error  en la peticion desde Prototype
 */
 function __$AjaxError(opciones, xhr, excepcion) {
     //Apagamos el cartel del div cargando si existriera
     if(__$P(opciones, "avisoCargando")!=undefined) {
         __$AjaxCargando(opciones.avisoCargando, false);
     }
     
     //cuando se trata de un error de servidor no hay exepcion
     if(excepcion==undefined) {
         //supongo error de HTTP, genero mensaje propio
         excepcion = {code: xhr.status, message: "Error del Servidor"}
     }
     //consulto si estava definido el evento onerror
     var funcionError = __$P(opciones, "onerror");
     if(funcionError!=undefined){
         funcionError(exepcion, __$P(opciones, "id"));
     }
 }
 /**
  * Funcion interna que se encarga de entregar un parametro opcional deesde una coleccion de tipo JSON , con un valor por defecto
 */
 function __$P(coleccion, parametro, defecto){
     if(coleccion==undefined){
         return defecto;
     } else {
         if(coleccion[ parametro] == undefined){
             return defecto;
         } else {
             return coleccion[ parametro];
         }
     }
 } 