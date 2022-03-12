<?php
declare(strict_types = 1);

namespace natokpe\vcard;

use \ArrayAccess;
use \Countable;
use \Iterator;

/**
 * @author Nat Okpe <natokpe@gmail.com>
 */
class Document implements ArrayAccess,
Countable,
Iterator
{
    /**
     * 
     */
    public function __construct()
    {}

    /**
     * @param $find string the search string
     * @param $fields array|null card fields to look in when searching
     * @param $flags int|null Bitflags (Regex, Case Sensitive, Whole word, highlight matches)
     */
    public function find(
        string $find,
        ?array $fields = null,
        ?int $flags = null): self
    {}

    /**
     * find and replace
     * 
     * @param $find string the search string
     * @param $fields array|null card fields to look in when searching
     * @param $flags int|null Bitflags (Regex, Case Sensitive, Whole word, highlight matches)
     */
    public function findReplace(
        string $find,
        string $replace,
        ?array $fields = null,
        ?int $flags = null): self
    {}

    /**
     * 
     */
    public function sort(?array $fields = null, ?int $flags = null): self
    {}

    /**
     * 
     */
    public function group(?array $fields = null, ?int $flags = null): self
    {}

    /**
     * 
     */
    public function remove(): bool
    {}

    /**
     * 
     */
    public function import(): bool
    {}

    /**
     * 
     */
    public function export(): string
    {}

    /**
     * TODO?
     * 
     * @param $filename string|null *.vcf, name.*
     * @param $path string|null Path to directory to save file
     */
    public function save(?string $filename = null, ?string $path = null): bool
    {}

    /**
     * @return string
     */
    public function __toString(): string
    {
        return '';
    }

    /**
     * Countable::count — Count elements of an object
     * @return int
     */
    public function count(): int
    {
        return 0;
    }

    /**
     * Iterator::current — Return the current element
     * @return mixed
     */
    public function current(): mixed
    {
        return 0;
    }
    
    /**
     * Iterator::key — Return the key of the current element
     * @return scalar
     */
    public function key()
    {
        return 0;
    }
    
    /**
     * Iterator::next — Move forward to next element
     * @return void
     */
    public function next(): void
    {
        return 0;
    }
    
    /**
     * Iterator::rewind — Rewind the Iterator to the first element
     * @return void
     */
    public function rewind(): void
    {
        return 0;
    }
    
    /**
     * Iterator::valid — Checks if current position is valid
     * @return bool
     */
    public function valid(): bool
    {
        return 0;
    }
}
