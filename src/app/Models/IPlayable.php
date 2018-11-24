<?php

namespace App\Models;

interface IPlayable {
    
    /**
     * Ritorna una stringa che indica il nome della traccia. Se è presente il titolo, viene
     * restituito quello.
     */
    public function nome_traccia();
    
    /**
     * Ritorna una stringa che indica il tipo della traccia, es "Spot" oppure "Canzone".
     */
    public function tipo_traccia();

    /**
     * Returns the unencrypted file.
     *
     * @return File The unencrtypted File
     */
    public function getUnencryptedFile();

    /**
     * Returns the protected filename of this playable object
     *
     * @return string The protected filename of this playable
     */
    public function getProtectedFilename();

    /**
     * Returns the encrypted file for this playable.
     *
     * @return File Returns the encrypted playable file.
     */
    public function getEncryptedFile();
}