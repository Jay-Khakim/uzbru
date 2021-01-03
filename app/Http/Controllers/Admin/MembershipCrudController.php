<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MembershipRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MembershipCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MembershipCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkCloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Membership::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/membership');
        CRUD::setEntityNameStrings('membership', 'memberships');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('status');
        CRUD::column('name_en');
        CRUD::column('field_en');
        // CRUD::column('name_uz');
        // CRUD::column('name_ru');
        // CRUD::column('slug_en');
        CRUD::column('certificate_number');
        CRUD::column('inn');
        CRUD::column('year');
        CRUD::column('value');
        CRUD::column('expiry_date');
        // CRUD::column('desc_en');
        // CRUD::column('desc_uz');
        // CRUD::column('desc_ru');
        // CRUD::column('file');
        // CRUD::column('web');
        CRUD::column('email');
        CRUD::column('phone');
        // CRUD::column('address_en');
        // CRUD::column('address_uz');
        // CRUD::column('address_ru');
        // CRUD::column('image');
        CRUD::addColumn(
            [
                'name' => 'image', // The db column name
                'label' => "Image", // Table column heading
                'type' => 'image',
                'prefix' => 'storage/',
                // optional width/height if 25px is not ok with you
                'height' => '60px',
                'width' => '60px',
            ],
        );
        CRUD::column('deleted_at');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MembershipRequest::class);

        CRUD::addField(
            [   // Enum
                'name'  => 'status',
                'label' => 'Status',
                'type'  => 'enum'
            ],
        );
        CRUD::field('status')->size(6);
        CRUD::field('name_en')->size(6);
        CRUD::field('name_uz')->size(6);
        CRUD::field('name_ru')->size(6);
        CRUD::field('field_en')->size(6);
        CRUD::field('field_uz')->size(6);
        CRUD::field('field_ru')->size(6);
        CRUD::field('owner_en')->size(6);
        CRUD::field('owner_uz')->size(6);
        CRUD::field('owner_ru')->size(6);
        // CRUD::field('slug_en');
        CRUD::field('certificate_number')->size(4);
        CRUD::field('inn')->size(4);
        CRUD::field('year')->size(4);
        CRUD::field('value')->size(6);
        CRUD::field('expiry_date')->size(6);
        CRUD::addField(
            [   // CKEditor
                'name'          => 'desc_en',
                'label'         => 'Description in English',
                'type'          => 'ckeditor',

                // optional:
                // 'extra_plugins' => ['oembed', 'widget'],
                'options'       => [
                    'autoGrow_minHeight'   => 100,
                    'autoGrow_bottomSpace' => 30,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
        );
        CRUD::addField(
            [   // CKEditor
                'name'          => 'desc_uz',
                'label'         => 'Description in Uzbek',
                'type'          => 'ckeditor',

                // optional:
                // 'extra_plugins' => ['oembed', 'widget'],
                'options'       => [
                    'autoGrow_minHeight'   => 100,
                    'autoGrow_bottomSpace' => 30,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
        );
        CRUD::addField(
            [   // CKEditor
                'name'          => 'desc_ru',
                'label'         => 'Description in Russian',
                'type'          => 'ckeditor',

                // optional:
                // 'extra_plugins' => ['oembed', 'widget'],
                'options'       => [
                    'autoGrow_minHeight'   => 100,
                    'autoGrow_bottomSpace' => 30,
                    'removePlugins'        => 'resize,maximize',
                ]
            ],
        );
        // CRUD::field('desc_en');
        // CRUD::field('desc_uz');
        // CRUD::field('desc_ru');
        // CRUD::field('file')->size(3);
        CRUD::field('web')->size(3);
        CRUD::field('email')->size(3);
        CRUD::field('phone')->size(3);
        CRUD::field('address_en')->size(4);
        CRUD::field('address_uz')->size(4);
        CRUD::field('address_ru')->size(4);
        CRUD::addField(
            [
                'label' => "Logo of Company",
                'name' => "image",
                'type' => 'image',
                'crop' => true, // set to true to allow cropping, false to disable
                'aspect_ratio' => 1, // ommit or set to 0 to allow any aspect ratio
                'disk'      => 'uploads', // in case you need to show images from a different disk
                'save_path_to_database' => true,
                // 'fake' => true,
                // 'prefix'    => 'uploads/images/profile_pictures/' // in case your db value is only the file name (no path), you can use this to prepend your path to the image src (in HTML), before it's shown to the user;
            ]
        );

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
