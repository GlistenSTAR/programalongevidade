<?php

namespace App\Http\AreasNegocio\CAD\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $Msfco_FederalCode
 * @property int $Acct_Nr
 * @property string $Rec_St
 * @property string $Estab_PublicDate
 * @property string $Estab_DeliveryId
 * @property string $Supplier_ChangeId
 * @property string $Supplier_Type
 * @property string $Estab_FederalCode
 * @property string $Msfco_FederalCodeChain
 * @property string $MsfCo_FederalName
 * @property string $MsfCo_Name
 * @property string $MsfCo_EconoGroup
 * @property string $Supplier_FederalCode
 * @property string $Address_Group
 * @property string $Address
 * @property string $Address_Nr
 * @property string $Address_Info
 * @property string $Address_Quarter
 * @property int $City_Code
 * @property string $City
 * @property string $Address_Zip
 * @property string $State
 * @property string $Phone1
 * @property string $Phone2
 * @property string $Estab_Activity
 * @property string $Email
 * @property string $Rec_Updtime
 */
class PDV extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'LGV_PDVS';

    /**
     * @var array
     */
    protected $fillable = ['Msfco_FederalCode', 'Acct_Nr', 'Rec_St', 'Estab_PublicDate', 'Estab_DeliveryId', 'Supplier_ChangeId', 'Supplier_Type', 'Estab_FederalCode', 'Msfco_FederalCodeChain', 'MsfCo_FederalName', 'MsfCo_Name', 'MsfCo_EconoGroup', 'Supplier_FederalCode', 'Address_Group', 'Address', 'Address_Nr', 'Address_Info', 'Address_Quarter', 'City_Code', 'City', 'Address_Zip', 'State', 'Phone1', 'Phone2', 'Estab_Activity', 'Email', 'Rec_Updtime'];

    public $timestamps = false;

}
