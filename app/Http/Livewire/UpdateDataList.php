<?php

namespace App\Http\Livewire;

use App\Models\DataList;
use Livewire\Component;

class UpdateDataList extends Component
{

    public $lists;
    public $listId;
    public $element;
    public $index;
    public $successMessage = '';
    public $isDeleteMessage = false;


    public function edit(DataList $dataList, $item)
    {
        foreach ($dataList->content as $key => $dataItem)
            if ($dataItem == $item)
                $this->index = $key;

        $this->listId = $dataList->id;
        $this->element = $item;
    }


    public function update()
    {
        $dataList = DataList::find($this->listId);
        $list = $dataList->content;
        $list[$this->index] = $this->element;
        $dataList->update(['content' => $list]);

        $this->reset(['element', 'listId', 'index']);

        $this->isDeleteMessage = false;
        $this->successMessage = 'List Successfully Updated';
    }


    public function create($id)
    {
        $this->reset(['element']);
        $this->listId = $id;
    }


    public function store()
    {
        $dataList = DataList::find($this->listId);
        $list = $dataList->content;
        if ($this->element)
            array_push($list, $this->element);

        $dataList->update(['content' => $list]);
        $this->reset(['element', 'listId']);

        $this->isDeleteMessage = false;
        $this->successMessage = 'New Item Added Successfully';
    }


    public function delete(DataList $dataList, $item)
    {
        foreach ($dataList->content as $key => $dataItem)
            if ($dataItem == $item)
                $this->index = $key;

        $this->listId = $dataList->id;
    }


    public function destroy()
    {
        $dataList = DataList::find($this->listId);
        $list = $dataList->content;
        unset($list[$this->index]);
        $dataList->update(['content' => array_values($list)]);

        $this->reset(['element', 'index']);

        $this->isDeleteMessage = true;
        $this->successMessage = 'Record Has Been Deleted Successfully';
    }


    public function resetProperty()
    {
        $this->reset(['element', 'listId', 'index']);
    }


    public function dismissMessage()
    {
        $this->successMessage = '';
    }


    public function render()
    {
        return view('livewire.update-data-list');
    }
}
