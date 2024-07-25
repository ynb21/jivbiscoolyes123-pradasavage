-- Check existing data
SELECT * FROM view_count;

-- If no data exists, insert initial data
INSERT INTO view_count (id, count) VALUES (1, 0)
ON DUPLICATE KEY UPDATE count = COUNT;