<?php

namespace App\Http\Controllers;

use App\Models\LeavingVehicule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LeavingVehiculeController extends Controller
{
    public function leavingVehiculeStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get (
     *      path="/leavingVehicule",
     *      operationId="leavingVehiculeIndex",
     *      tags={"leavingVehicule"},

     *      summary="Get Of LeavingVehicule",
     *      description="Returns the leavingVehicule",
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function leavingVehiculeIndex()
    {
        $leavingVehicule = LeavingVehicule::all();
        return response()->json($leavingVehicule);
    }

    /**
     * @OA\Get (
     *      path="/leavingVehicule/{id}",
     *      operationId="leavingVehiculeShow",
     *      tags={"leavingVehicule"},

     *      summary="Get Of LeavingVehicule",
     *      description="Returns the leavingVehicule",
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function leavingVehiculeShow($id)
    {
        $leavingVehicule = DB::table('leaving_vehicules')->select('leavingDate','renderDate','contract','id_clients','id_vehicules')->where('id', '=', $id)->get();
        return response()->json($leavingVehicule);
    }

    public function leavingVehiculeUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete (
     *      path="/leavingVehicule/{id}",
     *      operationId="leavingVehiculeDestroy",
     *      tags={"leavingVehicule"},

     *      summary="Get Of LeavingVehicule",
     *      description="Returns the leavingVehicule",
     *     @OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *      @OA\Response(
     *          response=200,
     *          description="Successful operation",
     *          @OA\MediaType(
     *           mediaType="application/json",
     *      )
     *      ),
     *      @OA\Response(
     *          response=401,
     *          description="Unauthenticated",
     *      ),
     *      @OA\Response(
     *          response=403,
     *          description="Forbidden"
     *      ),
     * @OA\Response(
     *      response=400,
     *      description="Bad Request"
     *   ),
     * @OA\Response(
     *      response=404,
     *      description="not found"
     *   ),
     *  )
     */

    public function leavingVehiculeDestroy($id)
    {
        $leavingVehicule = DB::table('leaving_vehicules')->where('id','=',$id)->delete();
        return response()->json($leavingVehicule);
    }
}
