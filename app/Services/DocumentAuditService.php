<?php

namespace App\Services;

use App\Models\backend\DocumentAudit; 

class DocumentAuditService
{
    public function CreateDocumentAudit($userId, $documentId, $mainFolderId, $subFolderId,
    $operation){
       DocumentAudit::create([
            "user_id" => $userId,
            "document_id" => $documentId,
            "main_folder_id" => $mainFolderId,
            "sub_folder_id" => $subFolderId,
            "operation" => $operation 
       ]);
       return true;
    }

    
 
}
