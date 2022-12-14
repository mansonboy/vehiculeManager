<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function appointmentStore(Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Get(
     *      path="/appointment",
     *      operationId="appointmentIndex",
     *      tags={"rendez vous"},

     *      summary="Get List Of appointment",
     *      description="Return the list appointment",
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

    public function appointmentIndex()
    {
        $appointment = Appointment::all();
        return response()->json($appointment);
    }

    /**
     * @OA\Get(
     *      path="/appointment/{id}",
     *      operationId="appointmentShow",
     *      tags={"rendez vous"},
     *      summary="Get a one appointment",
     *      description="Returns a one appointment",
     *@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *     @OA\Response(
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

    public function appointmentShow($id)
    {
        $appointment = DB::table('appointments')->select('date_and_hour', 'description', 'id_employees', 'id_clients', 'id_subjects')->where('id', '=', $id)->get();
        return response()->json($appointment);
    }

    public function appointmentUpdate($id, Request $request)
    {
        return response()->json();
    }

    /**
     * @OA\Delete(
     *      path="/appointment/{id}",
     *      operationId="appointmentDestroy",
     *      tags={"rendez vous"},
     *      summary="Delete a one appointment",
     *      description="Returns a one appointment",
     *@OA\Parameter(
     *      name="id",
     *      in="path",
     *      required=true,
     *      @OA\Schema(
     *           type="integer"
     *      )
     *   ),
     *     @OA\Response(
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

    public function appointmentDestroy($id)
    {
        $appointment = DB::table('appointments')->where('id', '=', $id)->delete();
        return response()->json($appointment);
    }
}
