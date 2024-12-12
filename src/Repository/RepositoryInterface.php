<?php

namespace Minormous\Data\Repository;

interface RepositoryInterface
{
    /**
     * Find a single object by identifier
     *
     * @param mixed $id
     *
     * @return object|null
     */
    public function find($id);

    /**
     * Find multiple objects by their identifiers
     *
     * @param array $ids
     *
     * @return array|Traversable
     */
    public function findByIds(array $ids);

    /**
     * Find a single object by variable criteria
     *
     * @param array $criteria
     *
     * @return object|null
     */
    public function findOneBy(array $criteria);

    /**
     * Find multiple objects by variable criteria
     *
     * @param array $criteria
     * @param array $order_by
     * @param integer $limit
     * @param integer $offset
     *
     * @return array|Traversable
     */
    public function findBy(array $criteria, array $order_by = null, $limit = null, $offset = null);
}
