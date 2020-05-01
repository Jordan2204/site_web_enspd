<?php

namespace App\Repositories;

use App\Contact;

class ContactsRepository extends ResourceRepository
{

  public function __construct(Contact $contact)
    {
        $this->model = $contact;
 
    }

}