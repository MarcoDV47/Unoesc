using Microsoft.EntityFrameworkCore;
using Microsoft.EntityFrameworkCore.Metadata.Internal;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace EFTest.Models
{
    [PrimaryKey(nameof(StudentId), nameof(CourseId))]
    public class StudentCourses
    {
        public int StudentId { get; set; }

        // Property Navigations
        [ForeignKey(nameof(StudentId))]
        public Student? Student { get; set; }

        public int CourseId { get; set; }
        [ForeignKey(nameof(CourseId))]
        public Course? Course { get; set; }
    }
}
