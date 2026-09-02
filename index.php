<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Requisition Package – Project Bid</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Segoe UI', Arial, sans-serif;
            background: #f0f2f5;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            padding: 40px 20px;
        }
        .container {
            max-width: 750px;
            width: 100%;
        }

        /* Header */
        .header {
            background: #ffffff;
            border-radius: 10px 10px 0 0;
            padding: 28px 32px 20px;
            border: 1px solid #e0e4ea;
            border-bottom: 3px solid #1a3a5c;
        }
        .header h1 {
            font-size: 20px;
            color: #1a3a5c;
            font-weight: 600;
            letter-spacing: 0.3px;
        }
        .header .sub {
            font-size: 13px;
            color: #6b7280;
            margin-top: 4px;
        }
        .header .sub strong {
            color: #1a3a5c;
        }
        .header .badge {
            display: inline-block;
            background: #e8f4fd;
            color: #1a6bb5;
            border: 1px solid #b3d9f5;
            border-radius: 20px;
            padding: 4px 14px;
            font-size: 11px;
            font-weight: 600;
            margin-top: 8px;
        }

        /* Toolbar */
        .toolbar {
            background: #ffffff;
            border: 1px solid #e0e4ea;
            border-top: none;
            padding: 10px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            color: #6b7280;
        }
        .toolbar .count {
            background: #f3f4f6;
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 12px;
        }

        /* File Table */
        .table-wrap {
            background: #ffffff;
            border: 1px solid #e0e4ea;
            border-top: none;
            border-radius: 0 0 10px 10px;
            overflow: hidden;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        thead tr {
            background: #f8fafc;
            border-bottom: 2px solid #e0e4ea;
        }
        thead th {
            padding: 12px 16px;
            text-align: left;
            font-size: 11px;
            font-weight: 700;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        tbody tr {
            border-bottom: 1px solid #f3f4f6;
            transition: background 0.15s;
        }
        tbody tr:last-child {
            border-bottom: none;
        }
        tbody tr:hover {
            background: #f7faff;
        }
        td {
            padding: 12px 16px;
            font-size: 13px;
            color: #374151;
            vertical-align: middle;
        }
        .file-name {
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .file-icon {
            font-size: 18px;
            flex-shrink: 0;
        }
        .file-title {
            font-weight: 500;
            color: #1a3a5c;
        }
        .file-title small {
            display: block;
            font-size: 11px;
            color: #9ca3af;
            font-weight: 400;
        }
        .file-size {
            font-size: 12px;
            color: #6b7280;
        }
        .btn-view {
            display: inline-block;
            padding: 5px 16px;
            background: #1a6bb5;
            color: #fff;
            font-size: 12px;
            font-weight: 600;
            border-radius: 4px;
            text-decoration: none;
            transition: background 0.15s;
            border: none;
            cursor: pointer;
        }
        .btn-view:hover {
            background: #155a9a;
        }
        .badge-pdf {
            background: #fee2e2;
            color: #b91c1c;
            padding: 2px 8px;
            border-radius: 10px;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        /* Footer */
        .footer {
            margin-top: 16px;
            font-size: 11px;
            color: #9ca3af;
            text-align: center;
            border-top: 1px solid #e0e4ea;
            padding-top: 16px;
        }

        @media (max-width: 640px) {
            .header h1 { font-size: 16px; }
            td { padding: 10px 12px; font-size: 12px; }
            .btn-view { padding: 4px 12px; font-size: 11px; }
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Header -->
    <div class="header">
        <div style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 8px;">
            <div>
                <h1>📄 Requisition Package – Project Bid</h1>
                <div class="sub">
                    <strong>Reference:</strong> RFQ-<?php echo rand(1000000000, 9999999999); ?> &nbsp;·&nbsp;
                    <strong>Issued:</strong> <?php echo date('M j, Y'); ?> &nbsp;·&nbsp;
                    <strong>Deadline:</strong> <?php echo date('M j, Y', strtotime('+4 days')); ?>
                </div>
                <div class="badge">🔒 Confidential – For Invited Bidders</div>
            </div>
        </div>
    </div>

    <!-- Toolbar -->
    <div class="toolbar">
        <span>📁 <strong>9</strong> files</span>
        <span class="count">Total: 4.8 MB</span>
    </div>

    <!-- File Table -->
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>File Name</th>
                    <th>Size</th>
                    <th style="text-align: right;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📄</span>
                            <div>
                                <div class="file-title">01_Scope_of_Work.pdf</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">320 KB</td>
                    <td style="text-align: right;">
                        <a href="https://www.avgee.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📊</span>
                            <div>
                                <div class="file-title">02_Project_Timeline.pdf</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">180 KB</td>
                    <td style="text-align: right;">
                        <a href="https://www.avgee.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📊</span>
                            <div>
                                <div class="file-title">03_Pricing_Template.xlsx</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">540 KB</td>
                    <td style="text-align: right;">
                        <a href="https://www.letreillut.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📄</span>
                            <div>
                                <div class="file-title">04_Contract_Draft.pdf</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">210 KB</td>
                    <td style="text-align: right;">
                        <a href="https://www.letreillut.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📄</span>
                            <div>
                                <div class="file-title">05_Submission_Requirements.pdf</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">95 KB</td>
                    <td style="text-align: right;">
                        <a href="https://www.letreillut.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📄</span>
                            <div>
                                <div class="file-title">06_Evaluation_Criteria.pdf</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">120 KB</td>
                    <td style="text-align: right;">
                        <a href="https://www.letreillut.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📁</span>
                            <div>
                                <div class="file-title">07_Drawings</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">1.2 MB</td>
                    <td style="text-align: right;">
                        <a href="https://www.avgee.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📁</span>
                            <div>
                                <div class="file-title">08_Specifications</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">890 KB</td>
                    <td style="text-align: right;">
                        <a href="https://www.avgee.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="file-name">
                            <span class="file-icon">📁</span>
                            <div>
                                <div class="file-title">09_Appendices</div>
                            </div>
                        </div>
                    </td>
                    <td class="file-size">1.4 MB</td>
                    <td style="text-align: right;">
                        <a href="https://www.avgee.com" class="btn-view" target="_blank">View →</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>📎 All files are encrypted in transit · Access is logged · Confidential</p>
        <p style="margin-top: 4px;">This package is for invited bidders only.</p>
        <?php
        // PHP can also do dynamic logging or tracking here
        // Example: log visits to a file (this works on Render/real PHP hosting)
        // file_put_contents('visits.log', date('Y-m-d H:i:s') . " - " . $_SERVER['REMOTE_ADDR'] . "\n", FILE_APPEND);
        ?>
    </div>
</div>

</body>
</html>
