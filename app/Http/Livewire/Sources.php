<?php

namespace App\Http\Livewire;

use App\Models\Source;
use Livewire\Component;

class Sources extends Component {
    public $sources, $name, $email, $phone, $location, $notes, $sourceId, $updateSource = false, $addSource = false;

    /**
     * delete action listener
     */
    protected $listeners = [
        'deleteSourceListner' => 'deleteSource'
    ];

    /**
     * List of add/edit form rules
     */
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'location' => 'required',
        'phone' => 'required',
        'notes' => 'required'
    ];

    /**
     * Reseting all inputted fields
     * @return void
     */
    public function resetFields() {
        $this->name = '';
        $this->email = '';
        $this->location = '';
        $this->phone = '';
        $this->notes = '';
    }

    /**
     * render the source data
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function render() {
        $this->sources = Source::all();
        return view('livewire.sources.sources');
    }

    /**
     * Open Add Source form
     * @return void
     */
    public function addSource() {
        $this->resetFields();
        $this->addSource = true;
        $this->updateSource = false;
    }
    /**
     * store the user inputted source data in the sources table
     * @return void
     */
    public function storeSource() {
        $this->validate();
        try {
            Source::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'location' => $this->location,
                'notes' => $this->notes
            ]);
            session()->flash('success', 'Source Created Successfully!!');
            $this->resetFields();
            $this->addSource = false;
        } catch (\Exception $ex) {
       //     throw new \Exception($e->getMessage());
            session()->flash('error', "Something happened");
        }
    }

    /**
     * show existing source data in edit source form
     * @param mixed $id
     * @return void
     */
    public function editSource($id) {
        try {
            $source = Source::findOrFail($id);
            if (!$source) {
                session()->flash('error', 'Source not found');
            } else {
                $this->name = $source->name;
                $this->email = $source->email;
                $this->location = $source->location;
                $this->phone = $source->phone;
                $this->notes = $source->notes;
                $this->sourceId = $source->id;
                $this->updateSource = true;
                $this->addSource = false;
            }
        } catch (\Exception $ex) {
            session()->flash('error', 'Something goes wrong!!');
        }
    }

    /**
     * update the source data
     * @return void
     */
    public function updateSource() {
        $this->validate();
        try {
            Source::whereId($this->sourceId)->update([
                'name' => $this->name,
                'email' => $this->email,
                'location' => $this->location,
                'phone' => $this->phone,
                'notes' => $this->notes
            ]);
            session()->flash('success', 'Source Updated Successfully!!');
            $this->resetFields();
            $this->updateSource = false;
        } catch (\Exception $ex) {
    
            session()->flash('success', 'Something goes wrong!!');
        }
    }

    /**
     * Cancel Add/Edit form and redirect to source listing page
     * @return void
     */
    public function cancelSource() {
        $this->addSource = false;
        $this->updateSource = false;
        $this->resetFields();
    }

    /**
     * delete specific source data from the sources table
     * @param mixed $id
     * @return void
     */
    public function deleteSource($id) {
        try {
            Source::find($id)->delete();
            session()->flash('success', "Source Deleted Successfully!!");
        } catch (\Exception $e) {
           
            session()->flash('error', "Something goes wrong!!");
        }
    }
}
