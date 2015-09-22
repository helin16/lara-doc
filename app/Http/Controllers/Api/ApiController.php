<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    protected $entityName = '';
    /**
     * Getting all the entities
     */
    public function index()
    {
        $class = trim($this->entityName);
        return $class::paginate()->toJson();
    }
    /**
     * Responds to requests to GET /[some entity name from the routes.php]/show/1
     *
     * @param unknown $id
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        $class = trim($this->entityName);
        $entity = $class::find($id);
        if($entity instanceof $class)
            return $entity->toJson();
        return response()->json([]);
    }
    /**
     * (non-PHPdoc)
     * @see \Illuminate\Routing\Controller::missingMethod()
     */
    public function missingMethod($parameters = array())
    {
        return response('Undefined methods.', 401);
    }
}