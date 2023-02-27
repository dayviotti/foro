<?php
/**
 * Denko File 0.1
 *
 * Container de funciones para archivos
 *
 * @author Denko Developers Group <info at dokkogroup dot com dot ar>
 * @copyright Copyright (c) 2007 Dokko Group.
 * @link http://www.dokkogroup.com.ar/
 *
 * @package Denko
 * @version 0.1
 */

/**
 * @package Denko
 */
class DK_File{

    /**
     * Convierte una cadena a nombre v�lido de archivo
     *
     * @param string $string cadena que convertir
     * @static
     * @access public
     * @return string
     */
    public static function filenameFormat($string,$replaceSpaces = '_'){

        # Primero elimino todos los caracteres que no sean v�lidos
        $string = preg_replace('/[^\w\s]|\_/','',$string);

        # Luego elimino el exceso de espacios
        $string = preg_replace('/\s+/',$replaceSpaces,$string);

        # Por �ltimo convierto los caracteres con acento y/o di�resis y la e�es,
        # adem�s de pasar todo a min�scula
        return strtr(strtolower($string),'������������������������','aaaaaaeeeeiiiiooooouuuun');
    }

    /**
     * Remueve los multiples forward slashes
     *
     * @param string $string cadena de texto
     * @static
     * @access public
     * @return string
     */
    public static function removeMultipleForwardSlashes($string){
        return preg_replace('|(\/)+|','/',$string);
    }

    /**
     * Obtiene la extensi�n del nombre de un archivo
     *
     * @param string $filename nombre del archivo
     * @static
     * @access public
     * @return string en caso que tenga extensi�n, NULL en caso contrario
     */
    public static function extension($filename){
        $dotpos = strrpos($filename,'.');
        if($dotpos === false){
            return null;
        }
        return substr($filename,$dotpos+1);
    }

    /**
     * Retorna el nombre del archivo, sin la extensi�n
     *
     * @param string $filepath path del archivo
     * @static
     * @access public
     * @return string
     */
    public static function filename($filepath){
        $basename = basename($filepath);
        $dotpos = strrpos($basename,'.');
        return ($dotpos === false) ? $basename : substr($basename,0,$dotpos);
    }

    /**
     * Verifica que un archivo haya sido subido correctamente. Retorna el c�digo de error.
     *
     * @param string $upload_key clave del archivo en el arreglo $_FILES
     * @param array $supportedMimeTypes mimes soportados
     * @static
     * @access public
     * @return integer c�digo de error
     * @link http://ar.php.net/features.file-upload.errors
     */
    public static function verifyUploadedFile($upload_key,$supportedMimeTypes=array()){

        # En caso que indique que no haya error
        if($_FILES[$upload_key]['error'] == UPLOAD_ERR_OK){

            # Verifico que el tama�o sea mayor a 0. Si el tama�o es 0, es porque
            # el archivo no pudo subirse
            if($_FILES[$upload_key]['size'] == '0'){
                return UPLOAD_ERR_NO_FILE;
            }

            # Verifico que el mime est� soportado
            if(count($supportedMimeTypes) > 0 && !in_array($_FILES[$upload_key]['type'],$supportedMimeTypes)){
                return UPLOAD_ERR_EXTENSION;
            }
        }

        # Retorno el error
        return $_FILES[$upload_key]['error'];
    }

    /**
     * Dado un MIME, retorna la extensi�n que tiene que tener el archivo
     *
     * @param string $mime MIME
     * @static
     * @access public
     * @return string
     */
    public static function mime2ext($mime){
        switch($mime){
            case 'image/jpg':
            case 'image/jpeg':
            case 'image/pjpeg': return 'jpg';
            case 'image/gif': return 'gif';
            default: return null;
        }
    }

    /**
     * Elimina un archivo
     *
     * @param string $filename nombre del archivo
     * @static
     * @access public
     * @return boolean TRUE en caso de �xito, FALSE en caso de fallo
     */
    public static function unlink($filename){
        return self::file_exists($filename) ? unlink($filename) : false;
    }

    /**
     * Verifica que un archivo exista
     *
     * @param string $filename nombre de archivo
     * @static
     * @access public
     * @return boolean si el archivo existe o no
     */
    public static function file_exists($filename){
        return (!empty($filename) && file_exists($filename) && is_file($filename));
    }
}