<?php

namespace Codem\CategorySide\Block;

class Categorylist extends \Magento\Framework\View\Element\Template
{
    protected $_categoryFactory;

    protected $_storeManager;

    protected $_categoryNameFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\CategoryFactory $categoryNameFactory,
        \Magento\Catalog\Model\ResourceModel\Category\CollectionFactory $collecionFactory,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\Registry $registry,
        \Magento\Catalog\Model\CategoryRepository $categoryRepository,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        $this->_categoryNameFactory = $categoryNameFactory;
        $this->_categoryFactory = $collecionFactory;
        $this->_storeManager = $storeManager;
        $this->categoryRepository = $categoryRepository;
        parent::__construct($context, $data);
    }

    public function getEnableCategory()
    {
        $storeGroupId = $this->_storeManager->getStore()->getStoreGroupId();

        $rootCategoryId = $this->_storeManager->getGroup($storeGroupId)->getRootCategoryId();

        return $rootCategoryId;
    }

    public function getRootSubCategory($categoryId)
    {
        $category = $this->categoryRepository->get($categoryId);

        return $category->getChildrenCategories();
    }

    public function getCategoryName($categoryId)
    {
        $category = $this->_categoryNameFactory->create()->load($categoryId)->setStore($this->_storeManager->getStore());
        return $category;
    }
}
