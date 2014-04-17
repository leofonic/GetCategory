<?php
class getcategory_oxcategorylist  extends getcategory_oxcategorylist_parent{
    
    protected $_aFlatCategoryList;
    
    protected function _ppBuildTree(){
        foreach ($this->_aArray as $oCat) {
            $this->_aFlatCategoryList[$oCat->getId()] = $oCat;
        }
        parent::_ppBuildTree();
    }

    public function getCatById($sOxid){
        return $this->_aFlatCategoryList[$sOxid];
    }
}