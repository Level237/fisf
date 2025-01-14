'use client'

import * as React from 'react'
import { ChevronLeft, ChevronRight, ChevronsLeft, ChevronsRight } from 'lucide-react'

import {
  Select,
  SelectContent,
  SelectItem,
  SelectTrigger,
  SelectValue,
} from '@/components/ui/select'
import { Button } from '@/components/ui/button'

interface PaginationProps {
  currentPage: number
  totalPages: number
  onPageChange: (page: number) => void
  onPerPageChange: (perPage: number) => void
  perPage: number
}

export function Pagination({
  currentPage = 1,
  totalPages = 758,
  onPageChange,
  onPerPageChange,
  perPage = 10
}: PaginationProps) {
  // Calculate visible page numbers
  const getPageNumbers = () => {
    const delta = 2
    const range = []
    const rangeWithDots: (string | number)[] = [];
    let l: number

    for (let i = 1; i <= Math.min(totalPages, delta * 2 + 5); i++) {
      range.push(i)
    }
    if (totalPages > delta * 2 + 5) {
      range.push(totalPages)
    }

    range.forEach(i => {
      if (l) {
        if (i - l === 2) {
          rangeWithDots.push(l + 1)
        } else if (i - l !== 1) {
          rangeWithDots.push('...')
        }
      }
      rangeWithDots.push(i)
      l = i
    })

    return rangeWithDots
  }

  return (
    <div className="flex flex-col sm:flex-row items-center gap-4 px-2">
      <div className="flex items-center gap-2">
        <span className="text-sm text-gray-700">Afficher</span>
        <Select
          value={perPage.toString()}
          onValueChange={(value) => onPerPageChange(Number(value))}
        >
          <SelectTrigger className="w-[130px] bg-white">
            <SelectValue>Tous les {perPage}</SelectValue>
          </SelectTrigger>
          <SelectContent className='bg-white'>
            <SelectItem value="10">Tous les 10</SelectItem>
            <SelectItem value="20">Tous les 20</SelectItem>
            <SelectItem value="50">Tous les 50</SelectItem>
            <SelectItem value="100">Tous les 100</SelectItem>
          </SelectContent>
        </Select>
      </div>

      <div className="flex items-center gap-1">
        <div className="flex items-center justify-between">
          <Button
            variant="ghost"
            size="sm"
            onClick={() => onPageChange(1)}
            disabled={currentPage === 1}
            className="hidden sm:flex"
          >
            <span className="sr-only mr-8">Début</span>
            <ChevronsLeft className="h-4 w-4" />
          </Button>
          <Button
            variant="ghost"
            size="sm"
            onClick={() => onPageChange(currentPage - 1)}
            disabled={currentPage === 1}
          >
            <span className="sr-only">Précédent</span>
            <ChevronLeft className="h-4 w-4" />
          </Button>
        </div>

        <span className="text-sm text-gray-700">Début</span>

        <div className="flex items-center gap-1">
          {getPageNumbers().map((pageNumber, index) => (
            <React.Fragment key={index}>
              {pageNumber === '...' ? (
                <span className="px-2">...</span>
              ) : (
                <Button
                  variant={currentPage === pageNumber ? 'default' : 'ghost'}
                  size="sm"
                  onClick={() => onPageChange(Number(pageNumber))}
                  className={currentPage === pageNumber ? 'bg-red-500 hover:bg-red-600 text-white' : ''}
                >
                  {pageNumber}
                </Button>
              )}
            </React.Fragment>
          ))}
        </div>

        <Button
          variant="ghost"
          size="sm"
          onClick={() => onPageChange(currentPage + 1)}
          disabled={currentPage === totalPages}
        >
          <span>suivant</span>
          <ChevronRight className="h-4 w-4 ml-1" />
        </Button>

        <Button
          variant="ghost"
          size="sm"
          onClick={() => onPageChange(totalPages)}
          disabled={currentPage === totalPages}
          className="hidden sm:flex"
        >
          <span>fin</span>
          <ChevronsRight className="h-4 w-4 ml-1" />
        </Button>

        <span className="ml-4 text-sm text-gray-700">
          Page {currentPage} sur {totalPages}
        </span>
      </div>
    </div>
  )
}

