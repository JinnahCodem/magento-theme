<?php declare(strict_types=1);

/*
 * Copyright (c) 2022 ReCodem Pvt Ltd All rights reserved
 */

namespace Codem\CategorySide\Block;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\CategoryFactory;
use Magento\Catalog\Model\CategoryRepository;
use Magento\Catalog\Model\ResourceModel\Category\Collection;
use Magento\Catalog\Model\ResourceModel\Category\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Registry;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Store\Model\StoreManagerInterface;

/**
 * Class Category List to get the category name
 */
class Categorylist extends Template
{
    /**
     * @var CollectionFactory
     */
    protected $_categoryFactory;

    /**
     * @var StoreManagerInterface
     */
    protected $_storeManager;

    /**
     * @var CategoryFactory
     */
    protected $_categoryNameFactory;

    /**
     * @param Context $context
     * @param CategoryFactory $categoryNameFactory
     * @param CollectionFactory $collecionFactory
     * @param StoreManagerInterface $storeManager
     * @param Registry $registry
     * @param CategoryRepository $categoryRepository
     * @param array $data
     */
    public function __construct(
        Context $context,
        CategoryFactory $categoryNameFactory,
        CollectionFactory $collecionFactory,
        StoreManagerInterface $storeManager,
        Registry $registry,
        CategoryRepository $categoryRepository,
        array $data = []
    ) {
        $this->_coreRegistry = $registry;
        $this->_categoryNameFactory = $categoryNameFactory;
        $this->_categoryFactory = $collecionFactory;
        $this->_storeManager = $storeManager;
        $this->categoryRepository = $categoryRepository;
        parent::__construct($context, $data);
    }

    /**
     * @return int
     * @throws NoSuchEntityException
     */
    public function getEnableCategory()
    {
        $storeGroupId = $this->_storeManager->getStore()->getStoreGroupId();

        $rootCategoryId = $this->_storeManager->getGroup($storeGroupId)->getRootCategoryId();

        return $rootCategoryId;
    }

    /**
     * @param $categoryId
     * @return Category[]|Collection
     * @throws NoSuchEntityException
     */
    public function getRootSubCategory($categoryId)
    {
        $category = $this->categoryRepository->get($categoryId);

        return $category->getChildrenCategories();
    }

    /**
     * @param $categoryId
     * @return mixed
     * @throws NoSuchEntityException
     */
    public function getCategoryName($categoryId)
    {
        $category = $this->_categoryNameFactory->create()->load($categoryId)->setStore($this->_storeManager->getStore());
        return $category;
    }
}
