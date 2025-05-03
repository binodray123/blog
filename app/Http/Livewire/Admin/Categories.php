<?php

namespace App\Http\Livewire\Admin;

use App\Models\ParentCategory;
use Livewire\Component;

class Categories extends Component
{
    public $isUpdateCategoryMode = false;
    public $pcategory_id, $pcategory_name;


    public function addParentCategory()
    {
        $this->pcategory_id = null;
        $this->pcategory_name = null;
        $this->isUpdateCategoryMode = false;
        $this->showParentCategoryModalForm();
    }

    public function createParentCategory()
    {
        $this->validate([
            'pcategory_name' => 'required|unique:parent_categories,name'
        ], [
            'pcategory_name.required' => 'Parent category field is required.',
            'pcategory_name.unique' => 'Parent category name is already exists.'
        ]);
        //store new parent category
        $pcategory = new ParentCategory();
        $pcategory->name = $this->pcategory_name;
        $saved = $pcategory->save();

        if ($saved) {
            $this->hideParentCategoryModalForm();
            $this->dispatchBrowserEvent('showToastr', ['type' => 'success', 'message' => 'New parent category has been created successfully.']);
        } else {
            $this->dispatchBrowserEvent('showToastr', ['type' => 'error', 'message' => 'Something went wrong.']);
        }
    }

    public function editParentCategory($id)
    {
        $pcategory = ParentCategory::findOrFail($id);
        $this->pcategory_id = $pcategory->id;
        $this->pcategory_name = $pcategory->name;
        $this->isUpdateCategoryMode = true;
        $this->showParentCategoryModalForm();
    }

    public function updateParentCategory()
    {
        $pcategory = ParentCategory::findOrFail($this->pcategory_id);

        $this->validate([
            'pcategory_name' => 'required|unique:parent_categories,name,' . $pcategory->id
        ], [
            'pcategory_name.required' => 'Parent category field is required.',
            'pcategory_name.unique' => 'Parent category name is taken.'
        ]);

        // Update parent category
        $pcategory->name = $this->pcategory_name;
        $pcategory->slug = null;
        $updated = $pcategory->save();

        if ($updated) {
            $this->hideParentCategoryModalForm();
            $this->dispatchBrowserEvent('showToastr', ['type' => 'success', 'message' => 'Parent category has been updated successfully.']);
        } else {
            $this->dispatchBrowserEvent('showToastr', ['type' => 'error', 'message' => 'Something went wrong.']);
        }
    }

    public function showParentCategoryModalForm()
    {
        $this->resetErrorBag();
        $this->dispatchBrowserEvent('showParentCategoryModalForm');
    }

    public function hideParentCategoryModalForm()
    {
        $this->dispatchBrowserEvent('hideParentCategoryModalForm');
        $this->isUpdateCategoryMode = false;
        $this->pcategory_id = $this->pcategory_name = null;
    }
    public function render()
    {
        return view('livewire.admin.categories', [
            'pcategories' => ParentCategory::orderBy('ordering', 'asc')->get()
        ]);
    }
}
